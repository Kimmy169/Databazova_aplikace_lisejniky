<?php

namespace App\Controller;

use App\Form\LisejnikType;
use App\Entity\Lisejnik;
use App\Entity\Sber;
use App\Form\SberType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

class MainController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }  
    
    #[Route('/novy-lisejnik',name:'create-lisejnik')]
    public function vytvorLisejnik(Request $request)
    {
        $lichen = new Lisejnik();
        $form = $this->createForm(LisejnikType::class,$lichen);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $this->entityManager->persist($lichen);
            $this->entityManager->flush();

            
            return $this->redirectToRoute('homepage');
        }
        return $this->render('main/lisejnik.html.twig',[
            'form_lisejnik' =>$form->createView()]);
        }
    #[Route('/novy-sber' ,name: 'create-sber')]
    public function createSber(Request $request)
    {
    $sber = new Sber();
    $form = $this->createForm(SberType::class,$sber);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $this->entityManager->persist($sber);
        $this->entityManager->flush();
    
        return $this->redirectToRoute('homepage');
    } 
    return $this->render('main/sber.html.twig',[
        'form_sber' =>$form->createView()]);
    }
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $lisejniky = $this->entityManager->getRepository(Lisejnik::class)->findAll();
        $sbery = $this->entityManager->getRepository(Sber::class)->findAll();
       
        return $this->render('main/homepage.html.twig',[
            'lisejniky' => $lisejniky,
            'sbery' => $sbery,
        ]);
    }
    #[Route('/edit-sber/{id}',name:'edit-sber')]
    public function editSber(Request $request, $id)
     {
        $sber = $this->entityManager->getRepository(Sber::class)->find($id);

        $form = $this->createForm(SberType::class,$sber);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($sber);
            $this->entityManager->flush();
        
            $this->addFlash('message', 'Záznam úspěšně vytvořen!');
            return $this->redirectToRoute('homepage'); 
        }

        return $this->render('main/sber.html.twig',[
            'form_sber' => $form->createView()
        ]);
     } 
     #[Route('/edit-lisejnik/{id}',name:'edit-lisejnik')]
    public function editLisejnik(Request $request, $id)
     {
        $lisejnik = $this->entityManager->getRepository(Lisejnik::class)->find($id);

        $form = $this->createForm(LisejnikType::class,$lisejnik);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($lisejnik);
            $this->entityManager->flush();
        
            $this->addFlash('message', 'Záznam úspěšně vytvořen!');
            return $this->redirectToRoute('homepage'); 
        }

        return $this->render('main/lisejnik.html.twig',[
            'form_lisejnik' => $form->createView()
        ]);
     }
     #[Route('/delete-sber/{id}',name:'delete-sber')]
    public function deleteSber($id)
     {
        
        $sber = $this->entityManager->getRepository(Sber::class)->find($id);

        $this->entityManager->remove($sber);
        $this->entityManager->flush();
        
        return $this->redirectToRoute('homepage');
     }
     #[Route('/delete-lisejnik/{id}',name:'delete-lisejnik')]
    public function deleteLisejnik($id)
     {
        $lisejnik = $this->entityManager->getRepository(Lisejnik::class)->find($id);

        $this->entityManager->remove($lisejnik);
        $this->entityManager->flush();

        return $this->redirectToRoute('homepage');
     }
}
