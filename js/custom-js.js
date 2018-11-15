document.addEventListener( 'wpcf7mailsent', function( event ) {
 window.dataLayer.push({
 "event" : "demandedecontact",
 "formId" : event.detail.contactFormId,
 "response" : event.detail.inputs
 })
});
