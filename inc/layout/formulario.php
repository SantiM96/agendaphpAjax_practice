<div class="campos">
    <div class="campo">
        <label for="nombre">Nombre:</label>
        <input 
            type="text" 
            placeholder="Nombre Contacto" 
            id="nombre"
            value="<?php echo ($contacto['name']) ? $contacto['name'] : '';  ?>"
        >
    </div>
    <div class="campo">
        <label for="empresa">Empresa:</label>
        <input 
            type="text" 
            placeholder="Nombre Empresa" 
            id="empresa"
            value="<?php echo ($contacto['company']) ? $contacto['company'] : '';  ?>"
        >
    </div>
    <div class="campo">
        <label for="telefono">Teléfono:</label>
        <input 
            type="tel" 
            placeholder="Teléfono Contacto" 
            id="telefono"
            value="<?php echo ($contacto['phone']) ? $contacto['phone'] : '';  ?>"
        >
    </div>
</div>
<div class="campo enviar">
    <?php
        $textoBtn = ($contacto['phone']) ? 'Guardar' : 'Añadir';
        $accion = ($contacto['phone']) ? 'editar' : 'crear';
    ?>
    <input type="hidden" id="accion" value="<?php echo $accion; ?>">
    <?php if( isset( $contacto['id'] )) { ?>
        <input type="hidden" id="id" value="<?php echo $contacto['id']; ?>">
    <?php } ?>
    <input type="submit" value="<?php echo $textoBtn; ?>">
</div>