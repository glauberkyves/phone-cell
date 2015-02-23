<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 20/01/15
 * Time: 16:03
 */

namespace Base\CrudBundle\Controller;


use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Service\Exception\CrudServiceException;
use Symfony\Component\HttpFoundation\Request;

class CrudController extends AbstractCrud
{
    protected $vars = array();

    public function indexAction(Request $request)
    {
        /** params data grid */
        if ($request->query->has('sEcho') && $request->query->has('sEcho')) {
            return $this->renderJson($this->getService()->getResultGrid($request));
        }

        return $this->render($this->resolveRouteName(), $this->vars);
    }

    public function createAction(Request $request)
    {
        if ($request->isMethod('post') && $this->validate() && $this->save()) {
            return $this->redirect($this->resolveRouteIndex());
        }

        $this->vars['entity'] = $this->getService()->newEntity()->populate($request->request->all());

        return $this->render($this->resolveRouteName(), $this->vars);
    }

    public function editAction(Request $request)
    {
        if ($request->isMethod('post') && $this->validate()) {
            $this->save();

            return $this->redirect($this->resolveRouteIndex());
        }

        if (!$request->get('id', false)) {
            return $this->redirect($this->resolveRouteIndex());
        }

        $this->vars['entity'] = $this->getService()->find($request->get('id'));

        if ($request->isMethod('post')) {
            $this->vars['entity'] = $this->getService()->newEntity()->populate($request->request->all());
        }

        return $this->render($this->resolveRouteName(), $this->vars);
    }

    public function listAction()
    {
    }


    /**
     * @param AbstractEntity $entity
     */
    public function validate(AbstractEntity $entity = null)
    {
        if (null === $entity) {
            $entity = $this->getService()->newEntity();
        }

        $entity->populate($this->getRequest()->request->all());

        $validator = $this->getValidator();
        $errors    = $validator->validate($entity);

        foreach ($errors->getIterator() as $error) {
            $this->addMessage($error->getMessageTemplate(), 'error');
        }

        if ($this->hasError()) {
            return false;
        }

        return $errors->count() > 0 ? false : true;
    }
}