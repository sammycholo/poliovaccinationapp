import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./intro_page/home.module').then( m => m.HomePageModule)
  },
  {
    path: 'workerlogin',
    loadChildren: () => import('./Worker/Auth/login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'workersignup',
    loadChildren: () => import('./Worker/Auth/signup/signup.module').then( m => m.SignupPageModule)
  },
  {
    path: 'usersignup',
    loadChildren: () => import('./User/Auth/signup/signup.module').then( m => m.SignupPageModule)
  },
  {
    path: 'userlogin',
    loadChildren: () => import('./User/Auth/login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'userHome',
    loadChildren: () => import('./User/home/home.module').then( m => m.HomePageModule)
  },
  {
    path: 'workerHome',
    loadChildren: () => import('./Worker/home/home.module').then( m => m.HomePageModule)
  },
  {
    path: 'userMap',
    loadChildren: () => import('./User/map/map.module').then( m => m.MapPageModule)
  },
  {
    path: 'WorkerMap',
    loadChildren: () => import('./Worker/map/map.module').then( m => m.MapPageModule)
  }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
