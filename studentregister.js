function show() {
    var x = document.getElementById("mySelect").value;
    var y = document.getElementById("selectCat").value;
        console.log(x)
        console.log(y) 

    if (x == '9' && y== 'cs_9') {
        document.getElementById('cs_9').style.display = 'inline'
        document.getElementById('medical_9').style.display = 'none'
        document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }

    else if (x == '9'&& y=='medical_9') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'inline'
        document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '9'&& y=='commerce') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        document.getElementById('commerce_9').style.display = 'inline'
        document.getElementById('matric').style.display = 'none'
        document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }

    else if (x == '10' && y=='cs_9'||y=='medical_9') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'inline'
        document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '10' && y=='commerce') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        document.getElementById('commerce_10').style.display = 'inline'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '11'&& y=='preeng') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'inline'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '11'&& y=='premedical') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'inline'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '11'&& y=='commerce') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'inline'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '12'&& y=='preeng') {
        document.getElementById('cs_9').style.display = 'none'}
    }