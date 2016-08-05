function Registration() {

}

Registration.prototype.validateEqualInput = function (verifyInput) {
    let verifyInputId = $(verifyInput).attr('id');
    let inputId = '#' + verifyInputId.split('-')[1];
    let warningInputId = inputId + '-warning';
    console.log(warningInputId);
    $(warningInputId).addClass('hidden');
    console.log(this.isInputValueEqual($(inputId), $(verifyInput)));
    if (!this.isInputValueEqual($(inputId), $(verifyInput))) {
        $(warningInputId).removeClass('hidden');
    }

};

Registration.prototype.isInputValueEqual = function (input, verifyInput) {
    return input.val() === verifyInput.val();
};

Registration.prototype.validateInputs = function () {
    $('input[type="email"]').each(()=> {
        console.log($(this).val());
    });
    return false;
};


var regObj = new Registration();