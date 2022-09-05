<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $article = new article();
        $article->setTitle('Interview de Auguste Caen');
        $article->setText('Bonjour, je m’appelle Maxime (Auguste Caen), je suis un jeune homme de 22 ans. Je suis dans le monde de la reconstitution historique depuis mes 18 ans. Avant cette période, je pratiquais du LARP (GN: Grandeur Nature en France) et pas mal de jeux de rôle orientés héroïque fantasy. Cet intérêt pour le monde médiéval, qu’il soit fictif ou réel, est apparu durant mes 1er parties de jeux de rôle alors que j’avais 11 ans et cet intérêt s’est développé jusqu’à aujourd’hui.');
        /* $article->setDate(new \DateTime('2021-05-19')); */
        $article->setUser($this->getReference('user_histoAdmin'));
        $article->setCategory($this->getReference('category_Actualités'));
        $manager->persist($article);

        $article = new article();
        $article->setTitle('L’affaire des étoffes de la cour des Nevière');
        $article->setText('En ce septième jour de l’an 12– (une tache d’encre rend illisible la fin de la date), la récente veuve d’Henri de Nevière me fît mander, moi Guigues Hérault des hautes terres par un de ses valets pour un entretien ce jour au sein de sa forteresse récemment terminée. Le comte n’ayant pu profiter de sa nouvelle demeure que quelques semaines de son vivant, cependant il sera le premier à la garder pour l’éternité. 

        La place forte des Nevière est construite sur un piton rocheux barrant la vallée des Busquets, elle sera le point central de la défense du comté. Pétronille de Nevière fut la deuxième épouse d’Henri, arrivée du nord quelques années auparavant dans le but de lui donner une descendance rapidement.
        
        Revenons à notre récit qui me fait prendre la plume ce jour, je rapporterais l’histoire de la mort suspecte du comte dans un prochain parchemin. Celui-ci est consacré à retranscrire le plus fidèlement possible l’affaire des étoffes de la cour de Pétronille de Nevière.
        
        ');
        /* $article->setDate(new \DateTime('2021-03-05')); */
        $article->setUser($this->getReference('user_histoMember'));
        $article->setCategory($this->getReference('category_Chroniques'));
        $manager->persist($article);

        $manager->flush();
    }

    public function getDependencies() 
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
