function createTicketComponent(type) {
    type = type || null;
  
    var rootElement = document.createElement('div');
        rootElement.setAttribute('class', 'row');
  
  
    var contents = `<div class="col-xs-4">
          <input name="ticket_name" type="text" class="form-control" placeholder="Ticket Name">
        </div> `;
  
  
    rootElement.innerHTML = contents;
  
    return rootElement;
  }