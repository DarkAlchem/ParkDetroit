/* Footer JavaScript*/
 $(function(){

          $("#typed").typed({
              strings: ["Park.","Explore.", "Roam."],
              typeSpeed: 50,
              backDelay: 3000,
              loop: true,
              contentType: 'html', // or text
              // defaults to false for infinite loop
              loopCount: false,
              resetCallback: function() { newTyped(); }
          });

          $(".reset").click(function(){
              $("#typed").typed('reset');
          });
});