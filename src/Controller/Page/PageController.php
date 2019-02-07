<?php

namespace Encyklopedia\Controller\Page;

use Encyklopedia\Domain\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {
    /**
     * @Route("/{slug}", name="page_view")
     * @param string $slug
     * @return Response
     */
    public function page(string $slug) : Response {
        /** @var ArticleService $articleService */
        $articleService = $this->container->get('encyklopedia.service.article');

        return new Response(
            '<html><body>Lucky slug: '.$slug.'</body></html>'
        );
    }
}