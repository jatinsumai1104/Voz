document
  .getElementById("general_voice_input")
  .addEventListener("submit", function(e) {
    e.preventDefault();

    record(function(res) {
      document.getElementById("voice_text").value = res;
      document.getElementById("general_voice_input").submit();
    });
  });
function record(callback) {
  console.log("Listening..");
  var recognition = new webkitSpeechRecognition();
  recognition.onresult = function(event) {
    var res = event.results[0][0].transcript;
    console.log("Done Listening");
    callback(res);
  };
  recognition.start();
}
