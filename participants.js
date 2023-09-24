// Display all participants to table

function getParticipants() {

    $.ajax({
        url: './php/getParticipants.php',
        method: 'POST',
        data: {},
        dataType: 'json',
        success: (response) => {
            document.querySelector('#participantsList tbody').innerHTML = ""

            $.each(response, (key, value) => {
                const data = {
                    id: value.id,
                    Fname: value.Fname,
                    Lname: value.Lname,
                    mi: value.mi,
                    age: value.age,
                    gender: value.gender,
                    address: value.address,
                    mNumber: value.mNumber,
                    Temp: value.Temp,
                    diagnosed: value.diagnosed,
                    encounter: value.encounter,
                    vaccinated: value.vaccinated,
                    nationality: value.nationality
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
            <td scope="col">${data.Fname}</td>
            <td scope="col">${data.Lname}</td>
            <td scope="col">${data.mi}</td>
            <td scope="col">${data.age}</td>
            <td scope="col">${data.address}</td>
            <td scope="col">${data.gender}</td>
            <td scope="col">${data.mNumber}</td>
            <td scope="col">${data.Temp}</td>
            <td scope="col">${data.diagnosed}</td>
            <td scope="col">${data.encounter}</td>
            <td scope="col">${data.vaccinated}</td>
            <td scope="col">${data.nationality}</td>
            <td scope="col">
                <input type="hidden" id="${data.id}">
                <button type="button" class="btn btn-info" onclick="editParticipant(${data.id})">Edit</button>
                <button type="button" class="btn btn-danger" onclick="deleteParticipant(${data.id})">Delete</button>
            </td>
        </tr>
    `

    let participantsList = $('#participantsList tbody')
    participantsList.append(output)

}


function updateParticipant(data) {
    $.ajax({
        url: './php/updateParticipant.php',
        method: 'POST',
        data: {
            id: data.id,
            Fname: data.Fname,
            Fname: data.Fname,
            mi: data.mi,
            age: data.age,
            address: data.address,
            gender: data.gender,
            mNumber: data.mNumber,
            Temp: data.Temp,
            diagnosed: data.diagnosed,
            encounter: data.encounter,
            vaccinated: data.vaccinated,
            nationality: data.nationality
                    },
        dataType: 'json',
        success: () => {
            getParticipants()
        }
    })
}




function deleteParticipant(id) {

    let response = confirm('Do you want to delete this participant?');

    if (response) {
        $.ajax({
            url: './php/deleteParticipant.php',
            method: 'POST',
            data: { id: id },
            dataType: 'json',
            success: () => {
                getParticipants()
            }
        })
    }

}

function formClear() {
    $('#id').val('')
    $('#firstname').val('')
    $('#lastname').val('')
    $('#mi').val('')
    $('#address').val('')
    $('#gender').val('')
    $('#age').val('')
    $('#mNumber').val('')
    $('#Temp').val('')
    $('#diagnosed').val('')
    $('#encounter').val('')
    $('#vaccinated').val('')
    $('#nationality').val('')
    $('#addModalFormLabel').html('Add New Participant')
    btnSave.innerHTML = 'Save'
    // $('#firstname').focus()
}


function editParticipant(id) {

    $.ajax({
        url: './php/getParticipant.php',
        method: 'GET',
        data: { id: id },
        dataType: 'json',
        success: (response) => {
        
            $('#addModalForm').modal('show')
            $('#addModalFormLabel').html('Edit Participant')
            btnSave.innerHTML = 'Update'

            $.each(response, (key, value) => {
                $('#id').val(value.id)
                $('#firstname').val(value.Fname)
                $('#lastname').val(value.Lname)
                $('#mi').val(value.mi)
                $('#age').val(value.age)
                $('#address').val(value.address)
                $('#gender').val(value.gender)
                $('#mNumber').val(value.mNumber)
                $('#Temp').val(value.Temp)
                $('#diagnosed').val(value.diagnosed)
                $('#encounter').val(value.encounter)
                $('#vaccinated').val(value.vaccinated)
                $('#nationality').val(value.nationality)
            })

        }
    })


}


// Load page
window.addEventListener('load', () => {
    getParticipants();
})


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
    let firstname = $('#firstname').val()
    let lastname = $('#lastname').val()
    let mi = $('#mi').val()
    let age = $('#age').val()
    let address = $('#address').val()
    let gender = $('#gender').val()
    let mNumber = $('#mNumber').val()
    let Temp = $('#Temp').val()
    let diagnosed = $('#diagnosed').val()
    let encounter = $('#encounter').val()
    let vaccinated = $('#vaccinated').val()
    let nationality = $('#nationality').val()

    let data = { id, firstname, lastname, mi, age, address, gender, mNumber, Temp, diagnosed, encounter, vaccinated, nationality }

    if (btnSave.innerHTML === 'Save') {
        addParticipant(data)
    } else {
        updateParticipant(data)
    }

    $('#addModalForm').modal('hide');
})


function searchParticipant() {

    let keyword = document.querySelector('#keyword').value

    $.ajax({
        url: './php/getParticipants.php',
        method: 'GET',
        data: { keyword: keyword },
        dataType: 'json',
        success: (response) => {
            document.querySelector('#participantsList tbody').innerHTML = ""

            $.each(response, (key, value) => {
                const data = {
                    id: data.id,
                    firstname: data.firstname,
                    lastname: data.lastname,
                    mi: data.mi,
                    age: data.age,
                    address: data.address,
                    gender: data.gender,
                    mNumber: data.mNumber,
                    Temp: data.Temp,
                    diagnosed: data.diagnosed,
                    encounter: data.encounter,
                    vaccinated: data.vaccinated,
                    nationality: data.nationality
                }

                insertDataToTable(data)
            })

        }
    })

}
