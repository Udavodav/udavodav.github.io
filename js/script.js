
const form = document.getElementById('order_form');

form.addEventListener("submit", function (event){
    event.preventDefault();
    const formData = new FormData(form);

    const data = {
        surname : formData.get('input_surname'),
        name : formData.get('input_name'),
        patronymic : formData.get('input_patronymic'),
        phone : formData.get('input_phone'),
        address : formData.get('input_address'),
    }

    if(!(validate(data.surname, "Фамилия") &&
    validate(data.name, "Имя") &&
    validate(data.patronymic, "Отчество"))){
        return
    }

    console.log(data);
    alert("Данные отправлены");
});

function validate(data, field) {
    if (!/^[A-zА-яЁё]*$/i.test(data)) {
        alert("В поле " + field + " должны быть только буквы");
        return false;
    }
    return true;
}