<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Engine;
use App\Entity\Ligne;
use App\Entity\Station;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Formation');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Engine', 'fas fa-subway', Engine::class);
        yield MenuItem::linkToCrud('Ligne', 'fas fa-road', Ligne::class);
        yield MenuItem::linkToCrud('Station', 'fas fa-hotel', Station::class);
    }

    public function configureCrud():Crud {
        return Crud::new()->setPaginatorPageSize(1);
    }
}
