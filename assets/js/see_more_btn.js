function see_more() {
  var elem = $("#btn").text();
  var content = $("#content_to_display");
  var competences = $("#competences");
  if (elem == "Voir plus") {
    // Stuff to do when btn is in the read more state
    $("#btn").text("Voir moins");
    $("#content_to_display").slideDown();
    content.css('display', 'flex');
    content.css('flex-wrap', 'wrap');
    content.css('gap', '30px');
    competences.css('position', 'sticky');
    competences.css('top', '15vh');
  } else {
    // Stuff to do when btn is in the read less state
    $("#btn").text("Voir plus");
    $("#content_to_display").slideUp();
    content.addClass("hidden");
    content.removeClass("showed");
    competences.css('position', 'block');
    competences.css('top', '');
  }
}