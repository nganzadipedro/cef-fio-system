let prova_id = $("#prova_id").val();
let botao = document.getElementById("botao_terminar");
console.log(prova_id);

setInterval(function () {

    botao.click();

    // $.ajax({
    //     url: "/gettimeexam/" + prova_id,
    //     headers: {
    //         'X-CSRF-TOKEN': $('input[name="_token"]').val()
    //     },
    //     method: "POST",
    //     success: function (result) {
    //         console.log(result);
    //         if (result == 'true') {
    //             window.location.href = '/painel-candidato/dashboard';
    //         }
    //     },
    //     error: function (error) {
    //         // reject(error.message);
    //     }
    // });

}, 10000);