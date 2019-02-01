import { Component, OnInit } from '@angular/core';
import { checkAndUpdateBinding } from '@angular/core/src/view/util';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  user:any;
  check:boolean=true;
  constructor() { 
    this.user={
      name:'JESLIN M GEORGE',
 a: 'MCA STUDENT AJCE',
 phone:['9947802826'],
 Address:'Manayathumalil H',
 };
  }
togglecheck(){
 this.check=!this.check;
}
  ngOnInit() {
  }

}
