<?php

namespace Pyz\Zed\Abc\Communication\Controller;

use Generated\Shared\Transfer\AbcTransfer;
use Spryker\Service\UtilText\Model\Url\Url;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @method \Pyz\Zed\AbcGui\Communication\AbcGuiCommunicationFactory getFactory()
 */
class AddController extends AbstractController
{
    protected const DEVELOPER_CREATED_SUCCESSFULLY_MESSAGE = 'Abc created successfully';

    /**
     * @param Request $request
     *
     * @return array|Response
     */
    public function indexAction(Request $request)
    {

        $abcFormAdd = $this
            ->getFactory()
            ->getAbcAddForm()
            ->handleRequest($request);

        if ($abcFormAdd->isSubmitted() && $abcFormAdd->isValid()) {

            $abcTransfer = new AbcTransfer();
            $abcTransfer->fromArray($abcFormAdd->getData(), true);

            $this->getFactory()->getAbcFacade()->createAbc($abcTransfer);

            $this->addSuccessMessage(static::DEVELOPER_CREATED_SUCCESSFULLY_MESSAGE);

            return $this->generateBaseRedirectUrl($abcTransfer);
        }


        return $this->viewResponse([
            'cartAddForm' => $abcFormAdd->createView(),
        ]);

    }


    /**
    * @param \Generated\Shared\Transfer\AbcTransfer $abcTransfer
    *
    * @return RedirectResponse
    */
    protected function generateBaseRedirectUrl(AbcTransfer $abcTransfer): RedirectResponse
    {

        $abcTransfer->requireIdAbc();

        $url = Url::generate('/abc-gui/view', [
        ViewController::PARAM_ID_DEVELOPER => $abcTransfer->getIdAbc(),

        ]);

        return $this->redirectResponse($url->build());

    }

}
