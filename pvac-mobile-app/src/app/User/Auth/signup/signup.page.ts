import { ServiceService } from './../../../Service/service.service';
import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.page.html',
  styleUrls: ['./signup.page.scss'],
})
export class SignupPage implements OnInit {

  cnic = '';
  password = '';
  email = '';
  mobile = '';
  spin = false;
  constructor(private navCtrl: NavController, private router: Router, private service: ServiceService) { }

  ngOnInit() {
  }

  goBack(){
    this.navCtrl.back();
  }

  signup(){
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
    }else if (this.mobile.length < 11){
      console.log('InCorrect Mobile number');
      this.service.presentToast('InCorrect Mobile number', 'warning', 'top', 2000);
    }else if (this.mobile === ''){
      console.log('Mobile Number is Required');
      this.service.presentToast('Mobile Number is Required', 'warning', 'top', 2000);
    }else if (this.email === ''){
      console.log('Email is Required');
      this.service.presentToast('Email is Required', 'warning', 'top', 2000);
    }else{
      // Make Request
      this.router.navigateByUrl('/userlogin', {replaceUrl: true});
    }
    this.spin = false;
  }

}
