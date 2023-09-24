const btnSaveDeclaration = document.querySelector('#btnSaveDeclaration');
btnSaveDeclaration.addEventListener('click', (e) => {
    e.preventDefault();

    // let id = $('#id').val()
    let full_name = $('#inputFullName').val()
    let age = $('#inputAge').val()
    let mobile_no = $('#inputMobileNo').val()
    let vaccinated = $('#inputVaccinated:checked').val() ? 'Yes' : 'No'
    let encountered = $('#inputEncountered:checked').val()? 'Yes' : 'No'
    let diagnosed = $('#inputDiagnosed:checked').val()? 'Yes' : 'No'
    let nationality = $('#inputNationality').val()
    let temperature= $('#inputTemperature').val()
    let gender = $("input[type='radio'][name='gender']:checked").val()
    
    

    let data = { full_name, age, mobile_no, vaccinated, encountered, diagnosed, nationality, gender, temperature }
    addDeclaration(data)

    // if (btnSave.innerHTML === 'Save') {
    //     addParticipant(data)
    // } else {
    //     updateParticipant(data)
    // }

    // $('#addModalForm').modal('hide');
})

function addDeclaration(data) {
    $.ajax({
        url: './php/addDeclaration.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: (response) => {
            if (response) {
                data.id = response
            }
        }
    })

}
