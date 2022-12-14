<?php

namespace Pyz\Glue\FaqsRestApi\Controller;

use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;
use Spryker\Glue\Kernel\Controller\AbstractController;

/**
 * @method \Pyz\Glue\FaqsRestApi\FaqsRestApiFactory getFactory()
 */
class FaqsResourceController extends AbstractController
{
    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function getAction(RestRequestInterface $restRequest): RestResponseInterface
    {
        if(!($restRequest->getResource()->getId())) {
            return $this->getFactory()
                ->createFaqsReader()
                ->getFaqs($restRequest);
        }
        else{
            return $this->getFactory()
                ->createFaqsReader()
                ->getFaq($restRequest);
        }
    }
}
