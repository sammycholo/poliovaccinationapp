import { ServiceService } from './../../../Service/service.service';
import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

  cnic = '';
  password = '';
  spin = false;
  constructor(private navCtrl: NavController, private router: Router, private service: ServiceService) { }

  ngOnInit() {
  }

  goBack(){
    this.navCtrl.back();
  }

  login(){
    this.spin = true;
    if (this.cnic === ''){
      console.log('CNIC is Required');
      this.service.presentToast('CNIC is Required', 'warning', 'top', 2000);
    }else if (this.password === ''){
      console.log('Password is required');
      this.service.presentToast('Password is Required', 'warning', 'top', 2000);
    }else if (this.cnic.length < 14){
      console.log('Incorrect CNIC Number');
      this.service.presentToast('InComplete CNIC Number', 'warning', 'top', 2000);
    }else if (this.password.length < 6){
      console.log('Password must be atleast 6 digits');
      this.service.presentToast('Password must be atleast 6 digits', 'warning', 'top', 2000);
    }else{
      // Make Request
      this.router.navigateByUrl('/userHome', {replaceUrl: true});
    }
    this.spin = false;
  }

}
