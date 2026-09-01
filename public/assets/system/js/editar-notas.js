
function alterar_notas() {

    var nota1 = $("#nota1edit").val();
    var nota2 = $("#nota2edit").val();
    var idaluno = $("#idalunoedit").val();
    var turmaid = $("#turmaid").val();
    var observacao = $("#observacao").val();

    var form = new FormData();

    form.append('nota1edit', nota1);
    form.append('nota2edit', nota2);
    form.append('idaluno', idaluno);
    form.append('turmaid', turmaid);
    form.append('observacao', observacao);

    Swal.fire({
        title: "Tem certeza que deseja alterar as notas?",
        text: "",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Confirmar!",
        cancelButtonText: "Cancelar",
        showLoaderOnConfirm: true,
        preConfirm: function () {
            return $.ajax({
                url: "/updateNotas",
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
                            title: "Actualização de notas",
                            text: 'Operação efectuada com sucesso.',
                            timer: 6000
                        });
                        window.location.reload();
                    }
                    else {
                        sweetAlert({
                            type: "warning",
                            title: "Actualização de notas",
                            text: res.mensagem,
                            timer: 6000
                        });
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

// validação de formulário
function validaForm() {

    var nota1 = document.getElementById('nota1edit').value;
    var nota2 = document.getElementById('nota2edit').value;
    var observacao = document.getElementById('observacao').value;

    var msgErro = '';
    var tem = true;

    if (nota1 == '' || nota1 == null) {
        tem = false;
        msgErro = 'Informe a primeira nota';
    }
    else if (nota1 < 0 || nota1 > 20) {
        tem = false;
        msgErro = 'A primeira nota deve estar entre 0 e 20';
    }
    else if (nota2 == '' || nota2 == null) {
        tem = false;
        msgErro = 'Informe a segunda nota';
    }
    else if (nota2 < 0 || nota2 > 20) {
        tem = false;
        msgErro = 'A segunda nota deve estar entre 0 e 20';
    }
    else if (observacao == '' || observacao == null) {
        tem = false;
        msgErro = 'Informe a justificação para a alteração da nota';
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

$(document).on('click', '.btn-edit', function () {

    var alunoId = $(this).data('aluno-id');
    var codigo = $(this).data('codigo');
    var nome = $(this).data('nome');
    var nota1 = $(this).data('nota1');
    var nota2 = $(this).data('nota2');

    // Preencher os campos do modal com os dados do formando
    $('#idalunoedit').val(alunoId);
    $('#nome_formando').val(nome);
    $('#numero_processo').val(codigo);
    $('#nota1edit').val(nota1);
    $('#nota2edit').val(nota2);
});

$("#btnSalvarAlteracoes").click(function () {

    if (validaForm()) {
        alterar_notas();
    }

});