$(function () {
    pageLoadScript();
});


function pageLoadScript() {

    _stepEffect = $('#stepEffect').val();
    _style = 'style3';
    _stepTransition = $('#stepTransition').is(':checked');
    _showButtons = $('#showButtons').is(':checked');
    _showStepNum = $('#showStepNum').is(':checked');


    $('.tsf-wizard-1').tsfWizard({
        stepEffect: _stepEffect,
        stepStyle: _style,
        navPosition: 'top',
        stepTransition: _stepTransition,
        showButtons: _showButtons,
        showStepNum: _showStepNum,
        height: 'auto'
    });

    $('.tsf-wizard-2').tsfWizard({
        stepEffect: 'slideDownUp',
        stepStyle: _style,
        navPosition: 'right',
        stepTransition: _stepTransition,
        showButtons: _showButtons,
        showStepNum: _showStepNum,
        height: '300px'
    });
    $('.tsf-wizard-3').tsfWizard({
        stepEffect: _stepEffect,
        stepStyle: _style,
        navPosition: 'left',
        stepTransition: _stepTransition,
        showButtons: _showButtons,
        showStepNum: _showStepNum,
        height: '300px'
    });
    $('.tsf-wizard-4').tsfWizard({
        stepEffect: _stepEffect,
        stepStyle: _style,
        navPosition: 'bottom',
        stepTransition: _stepTransition,
        showButtons: _showButtons,
        showStepNum: _showStepNum,
        height: '300px'
    });


}

