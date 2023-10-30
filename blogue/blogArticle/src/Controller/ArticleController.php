<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commentaires;
use App\Form\CommentairesType;
use App\Repository\CommentairesRepository;

#[Route('/article')]
class ArticleController extends AbstractController
{
    #[Route('/', name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'article' => $articleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            // Recuperation du user connecté

            $article->setUser($this->getUser());

            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash('success' , 'Votre article à bien été créer');

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        $this->addFlash('danger', 'Une erreur à était rencontrée lors de la création du produit');
        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
            
        ]);
    }

    #[Route('/{id}', name: 'app_article_show', methods: ['GET' , 'POST'])]
    public function show(Article $article , Request $request, EntityManagerInterface $entityManager , CommentairesRepository $commentairesRepository): Response
    {

        // Ajout commentaires

        $commentaire = new Commentaires();
        $form = $this->createForm(CommentairesType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $commentaire->setArticle($article);
            $commentaire->setUser($this->getUser());

            $entityManager->persist($commentaire);
            $entityManager->flush();

            

            return $this->redirectToRoute('app_commentaires_index', ['id' => $article->getId()], Response::HTTP_SEE_OTHER);
        }

        // Fin commentaires

        $comRepository = $entityManager->getRepository(Commentaires::class);
        
        return $this->render('article/show.html.twig', [
            'article' => $article,
            'form' => $form,
            'commentaires' => $comRepository->findBy(['article' =>$article]),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
            
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }
}
