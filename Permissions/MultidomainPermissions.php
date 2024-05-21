<?php


namespace MauticPlugin\MauticMultiDomainBundle\Security\Permissions;

use Mautic\CoreBundle\Security\Permissions\AbstractPermissions;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class MauticFocusPermissions.
 */
class MultidomainPermissions extends AbstractPermissions
{
    /**
     * {@inheritdoc}
     */
    public function __construct($params)
    {
        parent::__construct($params);
        $this->addStandardPermissions('categories');
        $this->addExtendedPermissions('items');
    }

    /**
     * {@inheritdoc}
     *
     * @return string|void
     */
    public function getName()
    {
        return 'multiDomain';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface &$builder, array $options, array $data)
    {
        $this->addStandardFormFields('multiDomain', 'categories', $builder, $data);
        $this->addExtendedFormFields('multiDomain', 'items', $builder, $data);
    }
}
