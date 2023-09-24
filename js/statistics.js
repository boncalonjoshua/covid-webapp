window.addEventListener('load', () => {
    getTotalDeclaration()
    getTotalFever()
    getTotalVaccinated()
    getTotalEncounters()
    getTotalAdult()
    getTotalMinor()
    getTotalForeigner()
    getTotalDiagnosed()
})

function getTotalDeclaration() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_declaration: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_declarations').innerHTML = value.total_declaration
            })
        }
    })

} 

function getTotalFever() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_fever: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_fever').innerHTML = value.total_fever
            })
        }
    })

} 

function getTotalVaccinated() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_vaccinated: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_vaccinated').innerHTML = value.total_vaccinated
            })
        }
    })

} 

function getTotalEncounters() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_encountered: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_encountered').innerHTML = value.total_encountered
            })
        }
    })

} 

function getTotalDiagnosed() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_diagnosed: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_diagnosed').innerHTML = value.total_diagnosed
            })
        }
    })

} 

function getTotalAdult() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_adult: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_adult').innerHTML = value.total_adult
            })
        }
    })

} 
function getTotalMinor() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_minor: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_minor').innerHTML = value.total_minor
            })
        }
    })

} 

function getTotalForeigner() {

    $.ajax({
        url: './php/statistics.php',
        method: 'GET',
        data: {total_foreigner: "True"},
        dataType: 'json',
        success: (response) => {
            $.each(response, (key, value) => {
                document.querySelector('#total_foreigner').innerHTML = value.total_foreigner
            })
        }
    })

} 