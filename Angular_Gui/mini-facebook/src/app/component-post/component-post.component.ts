import { Component , Input} from '@angular/core';

@Component({
  selector: 'app-component-post',
  templateUrl: './component-post.component.html',
  styleUrls: ['./component-post.component.css']
})
export class ComponentPostComponent {



   likeVisible = true;

  onLikeClick() {
    this.likeVisible = false;
  }

  onNoLikeClick() {
    this.likeVisible = true;
  }

   comment: string = '';
   
    onCommentChange(comment:string) {

  }


}
