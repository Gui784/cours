import { BrowserModule } from "@angular/platform-browser";
import { NgModule } from "@angular/core";

import { AppRoutingModule } from "./app-routing.module";
import { AppComponent } from "./app.component";
import { MonPremierComponentComponent } from "./mon-premier-component/mon-premier-component.component";
import { FormsModule } from "@angular/forms";
import { DataService } from "./service/data.service";

@NgModule({
  declarations: [AppComponent, MonPremierComponentComponent],
  imports: [BrowserModule, AppRoutingModule, FormsModule],
  providers: [DataService],
  bootstrap: [AppComponent],
})
export class AppModule {}
