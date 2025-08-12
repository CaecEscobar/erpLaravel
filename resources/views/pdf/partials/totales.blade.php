@php $money = fn($v) => is_numeric($v) ? number_format((float)$v, 2, '.', ',') : $v; @endphp
<table style="font-size:11px;">
  <tr>
    <td rowspan="6" class="padding5 border-all" style="width:61%; vertical-align:top; border-radius:2mm;">
      @if(!empty($data['detallePresupuesto']['presupuestoNotas']))
        <div>Nota Informativa:<br>{!! $data['detallePresupuesto']['presupuestoNotas'] !!}<br></div>
      @endif
      @if(!empty($data['detallePresupuesto']['presupuestoObservaciones']))
        <div>Observaciones:<br>{!! $data['detallePresupuesto']['presupuestoObservaciones'] !!}</div>
      @endif
    </td>
    <td style="width:20%;" class="bold-t right-align padding3">Importe:</td>
    <td style="width:18%;" class="right-align padding3">{{ $money($data['detallePresupuesto']['presupuestoTotalFull'] ?? 0) }}</td>
  </tr>
  <tr><td class="bold-t right-align padding3">Descuento:</td><td class="right-align padding3">{{ $money($data['detallePresupuesto']['descuento'] ?? 0) }}</td></tr>
  <tr><td class="bold-t right-align padding3">Subtotal:</td><td class="right-align padding3">{{ $money($data['detallePresupuesto']['presupuestoSubtotalFull'] ?? 0) }}</td></tr>
  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td class="bold-t right-align padding3">IVA:</td><td class="right-align padding3">{{ $money($data['detallePresupuesto']['ivaTotal'] ?? 0) }}</td></tr>
  <tr><td class="bold-t right-align padding3">Total:</td><td class="right-align padding3" style="font-size:11.5px; font-weight:bold;">{{ $money($data['detallePresupuesto']['montoTotalFull'] ?? 0) }}</td></tr>
  <tr><td colspan="3" class="border-all padding5" style="border-radius:2mm;">Importe con letra: {{ $data['letraNumero'] ?? '' }}</td></tr>
</table>
<br>
<table>
  <tr>
    <td style="font-size:11px; color:#2000a0; width:100%;">
      Los precios están sujetos a cambios sin previo aviso.<br>
      Todos los permiso y requerimientos necesarios para entrar a la empresa serán proporcionados por el cliente.<br>
      {{ $data['typemsg'] ?? '' }}<br>
      Esta cotización no incluye viaje previo de personal para verificación de obra o curso de la empresa, exámenes toxicológico o médicos, modificaciones de obra civil, eléctrica o cualquier otra.<br>
      En caso de que se tenga que hacer un traslado extra a la obra por razones ajenas a {{ $data['infoEmpresa']['empresa'] ?? '' }} se cobrará cargo extra.<br>
      Esta cotización incluye SÓLO los conceptos que en esta se mencionan.<br>
      Esta cotización NO incluye fianzas, CUOTAS SINDICALES, segurista, equipo de limpieza o baño; en caso de requerirlos se cotizará por separado.<br>
      El tiempo de Entrega será de 4 a 6 semanas, a partir de la entrega del anticipo correspondiente y de tener confirmación.<br>
      Las condiciones de pago para los materiales son del 70% de anticipo, el restante 30% al aviso de embarque de los materiales.<br>
      La instalación se cobrará 50% de anticipo y el resto contra avance, se iniciara una vez cubierta la totalidad de los materiales.<br>
      El contratante proporcionará lugar adecuado y seguro, bajo vigilancia para el almacenaje de los materiales mientras que éstos sean instalados, haciéndose responsable el contratante de los materiales en obra.<br>
      El contratante se compromete a proporcionar energía eléctrica a una distancia menor de 10 metros y una adecuada iluminación del área de trabajo, cuando la instalación nos sea contratada.
    </td>
  </tr>
</table>