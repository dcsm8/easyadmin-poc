<?php

namespace App\Controller\Admin;

use App\Entity\Account;
use App\Entity\Customer;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(AccountCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('My Project Dashboard');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Accounts', 'fas fa-building', Account::class);
        yield MenuItem::linkToCrud('Customers', 'fas fa-users', Customer::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
    }
}