import { Injectable } from '@angular/core';
import { ToastController } from '@ionic/angular';

@Injectable({
  providedIn: 'root'
})
export class ServiceService {

  constructor(public toastController: ToastController) { }

  async presentToast(message, color, position, duration) {
    const toast = await this.toastController.create({
      message,
      duration,
      color,
      position,
      keyboardClose: true,
      mode: 'ios'
    });
    toast.present();
  }
}
