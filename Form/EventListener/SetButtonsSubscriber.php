<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <albalmes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\Bundle\AssetsBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;

/**
 * Class SetButtonsSubscriber
 *
 * @package Black\Bundle\AssetsBundle\EventListener
 * @author  Alexandre Balmes <albalmes@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
class SetButtonsSubscriber implements EventSubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(FormEvents::PRE_SET_DATA => 'preSetData');
    }

    /**
     * @param FormEvent $event
     */
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $this->addCreateButtons($form);

        if ($data && $data->getId()) {
            $this->addDeleteButton($form);
        }
    }

    /**
     * @param FormInterface $form
     */
    private function addCreateButtons(FormInterface $form)
    {
        $form
            ->add('save', 'submit', array(
                    'label'     => 'black.bundle.assets.eventListener.setButtonsSubscriber.button.save.label',
                    'attr'      => array(
                        'class'     => 'btn btn-success',
                    )
                )
            )
            ->add('saveAndAdd', 'submit', array(
                    'label'     => 'black.bundle.assets.eventListener.setButtonsSubscriber.button.saveAndAdd.label',
                    'attr'      => array(
                        'class'     => 'btn btn-primary',
                    )
                )
            )
            ->add('reset', 'reset', array(
                    'label'     => 'black.bundle.assets.eventListener.setButtonsSubscriber.button.reset.label',
                    'attr'      => array(
                        'class'     => 'btn',
                    )
                )
            );
    }

    /**
     * @param FormInterface $form
     */
    private function addDeleteButton(FormInterface $form)
    {
        $form
            ->add('delete', 'submit', array(
                    'label'             => 'black.bundle.assets.eventListener.setButtonsSubscriber.button.delete.label',
                    'validation_groups' => false,
                    'attr'              => array(
                        'class'             => 'btn btn-danger'
                    )
                )
            );
    }

}
