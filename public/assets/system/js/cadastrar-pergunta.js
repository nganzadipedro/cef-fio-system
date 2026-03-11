
// validação de formulário
function valida_formulario() {

    const desc_pergunta = tinymce.get('desc_pergunta').getContent();
    const opcao_a = document.getElementById('opcao_a').value;
    const opcao_b = document.getElementById('opcao_b').value;
    const opcao_c = document.getElementById('opcao_c').value;
    const opcao_d = document.getElementById('opcao_d').value;
    const opcao_e = document.getElementById('opcao_e').value;
    const resposta = document.getElementById('resposta').value;
    const numero = document.getElementById('numero').value;
    const pontuacao = document.getElementById('pontuacao').value;

    var msgErro = '';
    var tem = true;

    if (desc_pergunta == '' || desc_pergunta == null) {
        tem = false;
        msgErro = 'A descrição da pergunta é obrigatória';
    }
    else if (opcao_a == '' || opcao_a == null) {
        tem = false;
        msgErro = 'A opção A é obrigatória';
    }
    else if (opcao_b == '' || opcao_b == null) {
        tem = false;
        msgErro = 'A opção B é obrigatória';
    }
    else if (opcao_c == '' || opcao_c == null) {
        tem = false;
        msgErro = 'A opção C é obrigatória';
    }
    else if (numero == '' || numero == null) {
        tem = false;
        msgErro = 'O número da pergunta é obrigatório';
    }
    else if (pontuacao == '' || pontuacao == null) {
        tem = false;
        msgErro = 'A pontuação da pergunta é obrigatória';
    }
    else if (resposta == '' || resposta == null) {
        tem = false;
        msgErro = 'Selecione a resposta correta';
    }
    else if (resposta == 'opcao4' && (opcao_d == '' || opcao_d == null)) {
        tem = false;
        msgErro = 'A resposta não pode ser a opção D, pois esta está vazia';
    }
    else if (resposta == 'opcao5' && (opcao_e == '' || opcao_e == null)) {
        tem = false;
        msgErro = 'A resposta não pode ser a opção E, pois esta está vazia';
    }

    if (tem == false) {
        sweetAlert({
            type: "warning",
            title: "Aviso!",
            text: msgErro,
            timer: 4000
        });

    }

    return tem;
}

function publicar() {

    const desc_pergunta = tinymce.get('desc_pergunta').getContent();
    const opcao_a = document.getElementById('opcao_a').value;
    const opcao_b = document.getElementById('opcao_b').value;
    const opcao_c = document.getElementById('opcao_c').value;
    const opcao_d = document.getElementById('opcao_d').value;
    const opcao_e = document.getElementById('opcao_e').value;
    const resposta = document.getElementById('resposta').value;
    const numero = document.getElementById('numero').value;
    const pontuacao = document.getElementById('pontuacao').value;
    const prova_id = document.getElementById('prova_id').value;


    var form = new FormData();

    form.append('desc_pergunta', desc_pergunta);
    form.append('opcao_a', opcao_a);
    form.append('opcao_b', opcao_b);
    form.append('opcao_c', opcao_c);
    form.append('opcao_d', opcao_d);
    form.append('opcao_e', opcao_e);
    form.append('resposta', resposta);
    form.append('numero', numero);
    form.append('pontuacao', pontuacao);
    form.append('prova_id', prova_id);

    Swal.fire({
        title: "Tem certeza que pretende adicionar esta pergunta? Em caso afirmativo, clique em Sim e aguarde a conclusão do processo.",
        text: "",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Sim!",
        cancelButtonText: "Cancelar",
        showLoaderOnConfirm: true,
        preConfirm: function () {
            return $.ajax({
                url: "/provas/pergunta/cadastrar",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: form,
                success: function (res) {

                    console.log(res);
                    if (res.status == 'sucesso') {
                        sweetAlert({
                            type: "success",
                            title: "",
                            text: 'Pergunta adicionada com sucesso.',
                            timer: 3000
                        });
                        setTimeout(() => {
                            window.location.reload();
                        }, 3000);
                    }

                },
                error: function (error) {

                    sweetAlert({
                        type: "warning",
                        title: "Erro " + error.status,
                        text: 'Erro: ' + error.responseJSON.message,
                        timer: 9000
                    });
                    console.log("Error: " + error.responseJSON.message);
                }
            });
        }
    });

}

document.getElementById('btn-cadastrar').addEventListener('click', function () {

    if (valida_formulario() == true) {
        publicar();
    }
});

document.getElementById('btn-cancelar').addEventListener('click', function () {
    window.location.reload();
});