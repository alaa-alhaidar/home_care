
    
    
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
        const jsonString = JSON.stringify(jsonData, null, 2);
    
        // Send the JSON string to the server
        fetch('/addAttr', {
            method: 'POST',
            body: jsonString,
            headers: {
                'Content-Type': 'application/json'
            }})
            .then(response => response.text())
            .then(message => {
                console.log(message);
                location.reload(); // Reload the page after saving
            })
            .catch(error => {
                console.error('Failed to save JSON data:', error);
            });
    });