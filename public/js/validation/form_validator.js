class FormValidator {
    constructor() {
      this.formFields = [];
      this.form = document.getElementById("form");
      
      this.processForm();
      this.init();
    }
  
    processForm = () => {
      this.form.querySelectorAll("input").forEach(e => {
        let minlength = e.getAttribute("minlength");
        if(!minlength) minlength = undefined;
        let maxlength = e.getAttribute("maxlength");
        if(!maxlength) maxlength = undefined;
        let matchWithPasswordId = e.getAttribute("data-match-witch-password-id");
        if(!matchWithPasswordId) matchWithPasswordId = undefined;
  
        this.addFormField( `#${e.id}`, {
          minlength: minlength, maxlength: maxlength,
          matchWithPasswordId: matchWithPasswordId
        });
      });
    }
  
    addFormField = (cssSelector, options) => {
      const formField = new FormField(cssSelector, options);
      this.formFields.push(formField);
    }
  
    init() {
      this.form.addEventListener("submit", (e) => {
        if(this.validateForm() === false)
        {
          e.preventDefault();
        }
        this.validateForm();
      });
    }
  
    validateForm = () => {
      const formResults = this.formFields.map( f => f.validate() );
  
      if(formResults.includes(false)) {
        return false;
      } else {
        return true;
      }
    }
  }