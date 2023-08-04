import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'mon-projet-angular';
  isAuth = true ;
  persoOne = 'Julie' ;
  persoTwo = 'Maxime' ;
  persoThree = 'Lena' ;
  onClique() {
    alert('Cliqué !');
  }

 presenceTab = [

    {

      name : 'Tristan',
      status : 'Absent',

    },

       {

      name : 'Julianne',
      status : 'Present',

    },

       {

      name : 'Hugo',
      status : 'Malade',

    }


  ];

}



