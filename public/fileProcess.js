document.addEventListener('DOMContentLoaded', function () {

    const jsonForm = document.getElementById('user_input');
    const info_Form = document.getElementById('node_info');
    const infoWindow = document.getElementById('info_div');
    const add_attr = document.getElementById('add_attr');
    const rmv_attr = document.getElementById('rmv_attr');

    fetch('data.json')
        .then(response => response.json())
        .then(data => {
            jsonData = data;
        });

    info_Form.addEventListener('submit', function (event) {
        event.preventDefault();

        const node_info = new FormData(info_Form);

        const node = node_info.get('node_name');

        const n = findNodeByName(jsonData, node);

        let infoHTML = `<p style="padding-left: 20px;" >Operation name: ${n.name}</p>`;

        for (const key in n.attr) {
            if (n.attr.hasOwnProperty(key)) {
                const value = n.attr[key];
                infoHTML += `
                        <p style="padding-left: 20px;">${key}: ${value}</p>
                    `;
            }
        }

        infoWindow.innerHTML = infoHTML;

    });

    jsonForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const user_data = new FormData(jsonForm);
        const node = user_data.get('node');
        const name = user_data.get('operation');
        const input = user_data.get('input');
        const output = user_data.get('output');
        const description = user_data.get('description');

        jsonForm.reset();

        const newNode = {
            name: name,
            attr: {
                input: input,
                output: output,
                description: description
            },
            children: []
        };


        // Find the node with the specified name
        const foundNode = findNodeByName(jsonData, node);

        if (foundNode) {
            if (!foundNode.children) {
                foundNode.children = [];
            }
            foundNode.children.push(newNode);
            console.log("User input added to node:", foundNode);
        } else {
            console.log("Node not found.");
        }
        const jsonString = JSON.stringify(jsonData, null, 2);

        // Send the JSON string to the server
        fetch('/save-json.php', {
            method: 'POST',
            body: jsonString
        })
            .then(response => response.text())
            .then(message => {
                console.log(message);
                location.reload(); // Reload the page after saving
            })
            .catch(error => {
                console.error('Failed to save JSON data:', error);
            });
            
    });
    add_attr.addEventListener('submit', function (event) {
        event.preventDefault();
        const add_attr_node = new FormData(add_attr);
        const node = add_attr_node.get('n_name');
        const node_ = findNodeByName(jsonData, node);
        const key = add_attr_node.get('attribute');
        const value = add_attr_node.get('attr_value');
    
        if (node_) {
            node_.attr[key] = value;
    
        } else {
            console.log("Node not found.");
        }
        const jsonString_1 = JSON.stringify(jsonData, null, 2);
    
        // Send the JSON string to the server
        fetch('/save-json', {
            method: 'POST',
            body: jsonString_1
            })
            .then(response => response.text())
            .then(message => {
                console.log(message);
                
            })
            .catch(error => {
                console.error('Failed to save JSON data:', error);
            });
    });
    
    rmv_attr.addEventListener('submit', function (event) {
        event.preventDefault();
        const rmv_attr_node = new FormData(rmv_attr);
        const node_r = rmv_attr_node.get('n_name_rmv');
        const node__ = findNodeByName(jsonData, node_r);
        const key = rmv_attr_node.get('attribute_rmv');
        
    
        if (node__) {
            delete node__.attr[key];
    
        } else {
            console.log("Node not found.");
        }
        const jsonString= JSON.stringify(jsonData, null, 2);
    
        // Send the JSON string to the server
        fetch('/save-json.php', {
            method: 'POST',
            body: jsonString
        })
            .then(response => response.text())
            .then(message => {
                console.log(message);
               
            })
            .catch(error => {
                console.error('Failed to save JSON data:', error);
            });
    });
  
});

function findNodeByName(node, name) {
    if (node.name === name) {
        return node;
    }
    if (node.children) {
        for (const child of node.children) {
            const foundNode = findNodeByName(child, name);
            if (foundNode) {
                return foundNode;
            }
        }
    }
    return null;
}

