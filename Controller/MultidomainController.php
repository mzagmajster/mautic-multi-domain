<?php

namespace MauticPlugin\MauticMultiDomainBundle\Controller;

use Mautic\CoreBundle\Controller\AbstractStandardFormController;
use Mautic\CoreBundle\Form\Type\DateRangeType;
use MauticPlugin\MauticSpintaxBundle\Model\EmailVariation;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MultidomainController.
 */
class MultidomainController extends AbstractStandardFormController
{
    /**
     * @return string
     */
    /*protected function getControllerBase()
    {
        return 'MauticMultiDomainBundle:Multidomain';
    }*/

    /**
     * @return string
     */
    protected function getModelName(): string
    {
        return 'multidomain';
    }

    protected function getTemplateBase()
    {
        return '@MauticMultiDomain/Multidomain';
    }

    /**
     * @return string
     */
    protected function getDefaultOrderColumn()
    {
        return 'email';
    }

    /**
     * @param int $page
     *
     * @return JsonResponse|RedirectResponse|Response
     */
    public function indexAction(Request $request, $page = 1)
    {
        return parent::indexStandard($request, $page);
    }

    /**
     * Generates new form and processes post data.
     *
     * @return JsonResponse|Response
     */
    public function newAction(Request $request)
    {
        return parent::newStandard($request);
    }

    /**
     * Generates edit form and processes post data.
     *
     * @param int  $objectId
     * @param bool $ignorePost
     *
     * @return JsonResponse|Response
     */
    public function editAction(Request $request, $objectId, $ignorePost = false)
    {
        return parent::editStandard($request, $objectId, $ignorePost);
    }    

    /**
     * Displays details on a spintax.
     *
     * @param $objectId
     *
     * @return array|JsonResponse|RedirectResponse|Response
     */
    public function viewAction(Request $request, $objectId)
    {
        return parent::viewStandard($request, $objectId, 'maultidomain', 'plugin.maultidomain');
    }

    /**
     * Clone an entity.
     *
     * @param int $objectId
     *
     * @return JsonResponse|RedirectResponse|Response
     */
    public function cloneAction(Request $request, $objectId)
    {
        return parent::cloneStandard($request, $objectId);
    }

    /**
     * Deletes the entity.
     *
     * @param int $objectId
     *
     * @return JsonResponse|RedirectResponse
     */
    public function deleteAction(Request $request, $objectId)
    {
        return parent::deleteStandard($request, $objectId);
    }

    /**
     * Deletes a group of entities.
     *
     * @return JsonResponse|RedirectResponse
     */
    public function batchDeleteAction(Request $request)
    {
        return parent::batchDeleteStandard($request);
    }

    
}