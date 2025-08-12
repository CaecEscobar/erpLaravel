<table>
  <tr>
    <td style="width:27%">
      <div class="cabezera">
        <img alt="{{ $data['detalleEmpresa']['empresaNombre'] ?? '' }}" src="{{ $data['empresaLogo'] ?? '' }}" style="width:210px;">
      </div>
    </td>
    <td style="width:47%">
      <div class="cabezera" style="border-left:2px solid #233c83;">
        <table style="font-size:10px; color:#2000a0;">
          <tr><td><span>{{ $data['infoEmpresa']['empresa'] ?? '' }}</span></td></tr>
          <tr><td><span>RFC: </span><span>{{ $data['infoEmpresa']['rfc'] ?? '' }}</span></td></tr>
          <tr><td><span>Matriz:</span></td></tr>
          <tr><td><span>{{ $data['infoEmpresa']['calle'] ?? '' }}</span>, Numero <span>{{ $data['infoEmpresa']['numero'] ?? '' }}</span></td></tr>
          <tr><td><span>{{ $data['infoEmpresa']['colonia'] ?? '' }}, {{ $data['infoEmpresa']['delegacion'] ?? '' }}</span></td></tr>
          <tr><td><span>C.P. {{ $data['infoEmpresa']['cp'] ?? '' }}, {{ $data['infoEmpresa']['estado'] ?? '' }}, {{ $data['infoEmpresa']['pais'] ?? '' }}</span></td></tr>
          <tr><td><span>{{ $data['infoEmpresa']['pagina'] ?? '' }}<br>{{ $data['infoEmpresa']['email'] ?? '' }}<br>Tel. {{ $data['infoEmpresa']['telefono'] ?? '' }}</span></td></tr>
          @if(!empty($data['infoEmpresa']['sucursal']))
            <tr><td><span>Sucursales: </span>{{ $data['infoEmpresa']['sucursal'] }}</td></tr>
          @endif
        </table>
      </div>
    </td>
    <td style="width:18%">
      <div class="cabezera">
        <div class="right" style="width:100%">
          <div style="border:1px solid #233c83; width:150px; border-radius:2mm;">
            <div style="color:#fff;background:#233c83; border-top-left-radius:2mm; border-top-right-radius:2mm; text-align:center;">{{ $data['type'] ?? '' }}</div>
            <div style="color:#ed200c; border-bottom-left-radius:2mm; border-bottom-right-radius:2mm; text-align:center;">{{ $data['folio'] ?? '' }}</div>
          </div>
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="3" class="right-align" style="font-size:9px; color:#2000a0;">No. Página / Páginas totales: <span class="page-number"></span></td>
  </tr>
</table>

<table>
  <tr>
    <td style="width:60%" class="infoCliente">
      <table style="font-size:11px; width:100%">
        <tr><td><span>Nombre: </span><span>{{ $data['detalleEmpresa']['empresaNombre'] ?? '' }}</span></td></tr>
        <tr><td><span>RFC: </span><span>{{ $data['detalleEmpresa']['empresaRFC'] ?? '' }}</span></td></tr>
        <tr><td style="width:100%"><span>Dirección: </span><span>{{ $data['detalleEmpresa']['empresaDireccion'] ?? '' }}</span></td></tr>
        <tr>
          <td>
            <span>Telefono: </span><span>{{ $data['detalleEmpresa']['empresaTelefono'] ?? '' }}</span>
            &nbsp;&nbsp;
            <span>Email: </span><span>{{ $data['detalleEmpresa']['empresaEmail'] ?? '' }}</span>
          </td>
        </tr>
      </table>
    </td>
    <td style="width:5%"></td>
    <td style="width:35%">
      <table style="border:1px solid #233c83; font-size:10px;">
        <tr><th colspan="2" class="info-pre center-align" style="border-top-left-radius:2mm; border-top-right-radius:2mm;">Presupuesto</th></tr>
        <tr><th class="left info-pre" style="width:40%">Proyecto:</th><th style="border-right:1px solid #233c83; border-bottom:1px solid #233c83; width:60%">&nbsp;&nbsp;{{ $data['nombreProyecto'] ?? '' }}</th></tr>
        <tr><th class="left info-pre" style="width:40%">Fecha emisión:</th><th style="border-right:1px solid #233c83; border-bottom:1px solid #233c83; width:60%">&nbsp;&nbsp;{{ $data['FechaSolicitud'] ?? '' }}</th></tr>
        <tr><th class="left info-pre" style="width:40%">Vigencia:</th><th style="border-right:1px solid #233c83; border-bottom:1px solid #233c83; width:60%">&nbsp;&nbsp;{{ $data['fechaValido'] ?? '' }}</th></tr>
      </table>
    </td>
  </tr>
</table>