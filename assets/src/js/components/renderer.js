import Highway from "@dogstudio/highway";
import SimpleLightbox from "simplelightbox";

// Contact
class ChiSiamoRenderer extends Highway.Renderer {
	onEnter() {

    new SimpleLightbox('.lightBox .glightbox' , {})

  }

	// Hooks/methods
	onEnterCompleted() {		
		
	}

}


export { ChiSiamoRenderer }