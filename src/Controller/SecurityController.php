<?php

namespace App\Controller;


use App\Entity\User;

use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $manager, UserInterface $user = NULL)
    {   
        if ($user){
            $message = 'Veuillez vous déconnecter SVP, si éventuellement vous souhaitez vous reconnecter ou vous inscrire !';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
            return $this->render('daily_fridge/accueil.html.twig');   
        }

        $user = new User();
        $manager = $this->getDoctrine()->getManager();
     

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();

        dump($user);        
        //die;


           return $this->redirectToRoute('security_login');
        }
        
        return $this->render('security/registration.html.twig',[
            'form' => $form->createView()
        ]);
        
    }

    /**
     * @Route("/connexion",name="security_login")
     */
    public function login(UserInterface $user = NULL){
        if ($user){
            $message = 'Veuillez vous déconnecter SVP, si éventuellement vous souhaitez vous reconnecter ou vous inscrire !';
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>'; 
            return $this->render('daily_fridge/accueil.html.twig');   
        }
        return $this->render('security/login.html.twig'); 
    }

     /**
     * @Route("/deconnexion",name="security_logout")
     */
    public function logout(){
        //return $this->render('security/login.html.twig');
    }
}
