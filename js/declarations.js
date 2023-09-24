// Display all participants to table

function getDeclarations() {

    $.ajax({
        url: './php/declarations.php?all=True',
        method: 'GET',
        data: {},
        dataType: 'json',
        success: (response) => {
            document.querySelector('#declarationsList tbody').innerHTML = ""

            $.each(response, (key, value) => {
                const data = {
                    id: value.id,
                    full_name: value.full_name,
                    age: value.age,
                    gender: value.gender,
                    nationality: value.nationality,
                    mobile_no: value.mobile_no,
                    vaccinated: value.vaccinated,
                    encountered: value.encountered,
                    diagnosed: value.diagnosed,
                    temperature: value.temperature
                }
                insertDataToTable(data)
            })

        }
    })

}

// Insert data to table
function insertDataToTable(data) {
    let output = `
        <tr>
            <td scope="col">${data.id}</td>
            <td scope="col">${data.full_name}</td>
            <td scope="col">${data.age}</td>
            <td scope="col">${data.gender}</td>
            <td scope="col">${data.nationality}</td>
            <td scope="col">${data.mobile_no}</td>
            <td scope="col">${data.temperature}</td>
            <td scope="col">${data.vaccinated}</td>
            <td scope="col">${data.encountered}</td>
            <td scope="col">${data.diagnosed}</td>
            <td scope="col">
                <input type="hidden" id="${data.id}">
                <button type="button" class="btn btn-info" onclick="editDeclaration(${data.id})">Edit</button>
                <button type="button" class="btn btn-danger" onclick="deleteDeclaration(${data.id})">Delete</button>
            </td>
        </tr>
    `

    let participantsList = $('#declarationsList tbody')
    participantsList.append(output)

}

// Load page
window.addEventListener('load', () => {
    getDeclarations();
})


function updateDeclaration(value) {
    $.ajax({
        url: './php/declarations.php',
        method: 'POST',
        data: {
            update: true,
            id: value.id,
            full_name: value.full_name,
            age: value.age,
            gender: value.gender,
            nationality: value.nationality,
            mobile_no: value.mobile_no,
            vaccinated: value.vaccinated,
            encountered: value.encountered,
            diagnosed: value.diagnosed,
            temperature: value.temperature
        },
        dataType: 'json',
        success: () => {
            getDeclarations()
        }
    })
}




function deleteDeclaration(id) {

    let response = confirm('Do you want to delete this participant?');

    if (response) {
        $.ajax({
            url: './php/declarations.php?delete=' + id,
            method: 'GET',
            data: { id: id },
            dataType: 'json',
            success: () => {
                getDeclarations()
            }
        })
    }

}

function formClear() {
    $('#id').val('')
    $('#firstname').val('')
    $('#lastname').val('')
    $('#address').val('')
    $('#gender').val('')
    $('#agency').val('')
    $('#email').val('')
    $('#remarks').val('')
    $('#addModalFormLabel').html('Add New Participant')
    btnSave.innerHTML = 'Save'
    // $('#firstname').focus()
}


function editDeclaration(id) {

    $.ajax({
        url: './php/declarations.php',
        method: 'GET',
        data: { id: id },
        dataType: 'json',
        success: (response) => {
        
            $('#addModalForm').modal('show')
            $('#addModalFormLabel').html('Edit Participant')
            btnSave.innerHTML = 'Update'

            $.each(response, (key, value) => {
                $('#id').val(value.id)
                $('#full_name').val(value.full_name)
                $('#age').val(value.age)
                $('#nationality').val(value.nationality)
                $('#gender').val(value.gender)
                $('#mobile_no').val(value.mobile_no)
                $('#temperature').val(value.temperature)
                $('#diagnosed').val(value.diagnosed)
                $('#encountered').val(value.encountered)
                $('#vaccinated').val(value.vaccinated)
            })

        }
    })


}



function addParticipant(data) {

    $.ajax({
        url: './php/addParticipant.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: (response) => {
            if (response) {
                data.id = response
                insertDataToTable(data);
            }
        }
    })

}


const btnSave = document.querySelector('#btnSave');
btnSave.addEventListener('click', (e) => {
    e.preventDefault();

    let id = $('#id').val()
    let full_name = $('#full_name').val()
    let age = $('#age').val()
    let mobile_no = $('#mobile_no').val()
    //let vaccinated = $('#inputVaccinated:checked').val() ? 'Yes' : 'No'
    //let encountered = $('#inputEncountered:checked').val()? 'Yes' : 'No'
    //let diagnosed = $('#inputDiagnosed:checked').val()? 'Yes' : 'No'
    let nationality = $('#nationality').val()
    let temperature= $('#temperature').val()
    // let gender = $("input[type='radio'][name='gender']:checked").val()

    let vaccinated = $('#vaccinated').val()
    let gender = $('#gender').val()
    let encountered = $('#encountered').val()
    let diagnosed = $('#diagnosed').val()

    let data = { id, full_name, age, mobile_no, vaccinated, encountered, diagnosed, nationality, gender, temperature }

    if (btnSave.innerHTML === 'Save') {
        addParticipant(data)
    } else {
        updateDeclaration(data)
    }

    $('#addModalForm').modal('hide');
})


function searchDeclaration() {

    let keyword = document.querySelector('#search').value
    $.ajax({
        url: './php/declarations.php?search=' + keyword,
        method: 'GET',
        data: { keyword: keyword },
        dataType: 'json',
        success: (response) => {
            document.querySelector('#declarationsList tbody').innerHTML = ""

            $.each(response, (key, value) => {
                const data = {
                    id: value.id,
                    full_name: value.full_name,
                    age: value.age,
                    gender: value.gender,
                    nationality: value.nationality,
                    mobile_no: value.mobile_no,
                    vaccinated: value.vaccinated,
                    encountered: value.encountered,
                    diagnosed: value.diagnosed,
                    temperature: value.temperature
                }

                insertDataToTable(data)
            })

        }
    })

}