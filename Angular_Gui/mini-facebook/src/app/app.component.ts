import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  post = [
    {
      title: "Super vacances !",
      content: "Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    } ,
    {
      title: "Mon chat trop mignon",
      content: "Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    } ,
    {
      title: "Après midi canapé",
      content: "Lorem ipsum dolor sit amet , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    }
  ];
}
