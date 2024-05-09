//** solicitação AJAX para o PHP */
document.getElementById('btnProximaAtividade').addEventListener('click', function () {
    const pontuacao = parseInt(urlParams.get('pontuacao'));

    const formData = new FormData();
    formData.append('pontuacao', pontuacao);

    fetch('./php/salvar-estrelas.php', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (response.ok) {
                //** ocultar depois mensagens */
                alert('estrelas salvas com sucesso!!');
                window.location.href = 'trilhas.html';
            } else {
                alert('erro ao salvar estrelas:', response.statusText);
            }
        })
        .catch(error => {
            alert('erro ao salvar estrelas:', error);
        });
});

