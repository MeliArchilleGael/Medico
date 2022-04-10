function submitForm(ObjectInput,InputD, Boardz) {
    let featureObjectInput = document.getElementById(ObjectInput);
    let featureInput= document.getElementById(InputD);
    let list = document.getElementById(Boardz);


    event.preventDefault();
    let input = featureInput.value;
    if (input === "") {
        alert("Can't be null");
    } else {
        let features = JSON.parse(featureObjectInput.value);
        features.push(input);
        featureInput.value = "";
        featureObjectInput.value = JSON.stringify(features);
        loadFeatures(featureObjectInput,list);
        console.log(features);
    }
}

function loadFeatures(featureObjectInput, featureList) {

    let features = JSON.parse(featureObjectInput.value);
    featureList.innerHTML = "";
    for (let i = 0; i < features.length; i++) {
        let item = document.createElement('div');
        item.setAttribute('id', i);
        item.setAttribute('class', 'p-1 element-div');
        let content = document.createElement('div');
        content.innerText = features[i];
        let button = document.createElement('button');
        button.addEventListener("click", function() {
            removeFeature(featureObjectInput, featureList)
        });

        button.innerText = "x";
        button.setAttribute('class', 'btn-danger btn-circle');

        item.appendChild(content);
        item.appendChild(button);
        item.classList.add('feature_item');
        featureList.appendChild(item);
    }
}

function removeFeature(featureObjectInput, featureList) {
    event.preventDefault();

    let b = event.target;
    let features = JSON.parse(featureObjectInput.value);
    console.log(features);
    features.splice(b.parentElement.getAttribute('id'), 1);
    console.log(features);
    featureObjectInput.value = JSON.stringify(features);
    loadFeatures(featureObjectInput,featureList);
}
