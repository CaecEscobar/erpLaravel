@php
    // Helper rápido para formato moneda. Ajusta a MXN si lo deseas.
    $money = fn($v) => is_numeric($v) ? number_format((float)$v, 2, '.', ',') : $v;
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <style>
        /* ===== Reset mínimo ===== */
        * { box-sizing: border-box; }
        body { font-family: Helvetica, Arial, sans-serif; font-size: 11px; color: #000; }
        table { border-collapse: collapse; width: 100%; }
        .right-align{ text-align: right;}
        .center-align{ text-align: center;}
        .left{ float:left;}
        .right{ float:right;}
        .padding5{ padding:5px; } .padding3{ padding:3px; }
        .bold-t{ font-weight: bold; }
        .titleAcuerdos{ font-size: 13px; color: #2000a0; }
        .titleTable{ background:#233c83; color:#fff; padding:5px; }
        .titleTable2{ color:#233c83; padding:5px; }
        .border-all{ border:1px solid #233c83; }
        .border-right-title{ border-right:1px solid #fff; }
        .altoTitle{ height:30px; }
        .info-left{ background:#233c83; color:#fff; padding:5px; border:1px solid #233c83; border-top-left-radius:2mm; border-bottom-left-radius:2mm; width:50px; }
        .info-right{ padding:5px; border:1px solid #233c83; border-top-right-radius:2mm; border-bottom-right-radius:2mm; }
        .infoCliente{ border:1px solid #233c83; border-radius:2mm; }
        .detail { width:100%; font-size:10px; }
        .cabezera{ height:126px; margin:5px 0; padding:5px; }
        .page_footer { width: 100%; border-top:1px solid #233c83; padding: 4px 0; font-size:9px; position: absolute; bottom: 0; left: 0 }
        .paginadortxt{ font-size:10px; color:#2000a0; width:100%; }

        html, body { margin: 5mm 10mm 20mm 10mm; }
        @page { margin: 60mm 10mm 22mm 10mm; }
        header { height: 60mm; }
        footer { height: 22mm; }
        main   { margin: 0; }                   
        .cabezera { height: auto; }   

        /* Utilidades de color/estética originales */
        .info-pre{ background:#233c83; color:#fff; padding:4px; font-weight:bold; }
        .titleTable-costado{ background:#233c83; height:29px; width:29px; }
    </style>
</head>
<body>
    {{-- ===== Header ===== --}}
    <header>
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
                            <tr><td><span>{{ $data['infoEmpresa']['ubicacion'] ?? '' }}</span>
                            {{-- <tr><td><span>{{ $data['infoEmpresa']['calle'] ?? '' }}</span>, Numero <span>{{ $data['infoEmpresa']['numero'] ?? '' }}</span></td></tr>
                            <tr><td><span>{{ $data['infoEmpresa']['colonia'] ?? '' }}, {{ $data['infoEmpresa']['delegacion'] ?? '' }}</span></td></tr>
                            <tr><td><span>C.P. {{ $data['infoEmpresa']['cp'] ?? '' }}, {{ $data['infoEmpresa']['estado'] ?? '' }}, {{ $data['infoEmpresa']['pais'] ?? '' }}</span></td></tr> --}}
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
                {{-- <td colspan="3" class="right-align" style="font-size:9px; color:#2000a0;">No. Página / Páginas totales: <span class="page-number"></span></td> --}}
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
                        {{-- <tr>
                            <th class="left info-pre" style="width:40%">Proyecto:</th>
                            <th style="border-right:1px solid #233c83; border-bottom:1px solid #233c83; width:60%">&nbsp;&nbsp;{{ $data['nombreProyecto'] ?? '' }}</th>
                        </tr> --}}
                        <tr>
                            <th class="left info-pre" style="width:40%">Fecha emisión:</th>
                            <th style="border-right:1px solid #233c83; border-bottom:1px solid #233c83; width:60%">&nbsp;&nbsp;{{ $data['FechaSolicitud'] ?? '' }}</th>
                        </tr>
                        <tr>
                            <th class="left info-pre" style="width:40%; border-bottom-left-radius:2mm;">Vigencia:</th>
                            <th class="bottom-right" style="border-right:1px solid #233c83; border-bottom:1px solid #233c83; width:60%">&nbsp;&nbsp;{{ $data['fechaValido'] ?? '' }}</th>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </header>

    {{-- ===== Footer ===== --}}
    {{-- <footer>
        <table class="page_footer">
            <tr>
                <td style="width:33%; text-align:left;">{{ $data['infoEmpresa']['empresa'] ?? '' }}</td>
                <td style="width:33%; text-align:center;">Página <span class="page-number"></span></td>
                <td style="width:33%; text-align:right;">{{ $data['anhio'] ?? '' }}</td>
            </tr>
        </table>
    </footer> --}}

    {{-- ===== Contenido ===== --}}
    <main>
        <table>
            <tr>
                <td>
                    <table style="font-size:10px;">
                        <tbody>
                            <tr>
                                <td class="info-left bold-t" style="width:15%">Elaboró:</td>
                                <td class="info-right" style="width:45%">{{ $data['usuarioElaboro'] ?? '' }}</td>
                                <td style="width:5%"></td>
                                <td class="info-left bold-t" style="width:12%; margin-left:50px;">Moneda:</td>
                                <td class="info-right" style="width:23%">{{ $data['monedaN'] ?? '' }}</td>
                            </tr>
                            {{-- <tr>
                                <td class="info-left bold-t" style="width:15%">Solicitado Por:</td>
                                <td class="info-right" style="width:45%">{{ $data['nombreSolicita'] ?? '' }}</td>
                                <td colspan="3">&nbsp;</td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <br>
                    <span style="font-size:12px; width:100%">Agradeciendo la oportunidad de atenderlo, ponemos a su consideración nuestra propuesta comercial. Esperando sea de su agrado.<br></span>
                    <br>
                </td>
            </tr>
        </table>

        <table class="detail">
            <thead>
                <tr class="altoTitle">
                    <th class="titleTable border-right-title" style="width:7%; text-align:center;">Cant.</th>
                    <th class="titleTable border-right-title" style="width:51%; text-align:left;">Descripcion</th>
                    <th class="titleTable border-right-title" style="width:11%; text-align:center;">U. Medida</th>
                    <th class="titleTable border-right-title" style="width:11%; text-align:center;">P. Unitario</th>
                    <th class="titleTable border-right-title" style="width:7%; text-align:center;">Dto</th>
                    <th class="titleTable" style="width:13%; text-align:right;">Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach(($data['detallePartida'] ?? []) as $partida)
                    <tr style="page-break-inside:avoid;">
                        <td class="border-all center-align padding5" style="width:7%"><span style="font-size:8px;">{{ $partida['partida_producto_cantidad'] ?? '' }}</span></td>
                        <td class="border-all padding5" style="width:51%">
                            @php
                                $sku  = ($partida['partidaSustitucionSku'] ?? '') !== '' ? $partida['partidaSustitucionSku'] : ($partida['partidaProductoSku'] ?? '');
                                $name = ($partida['partidaSustitucionNombre'] ?? '') !== '' ? $partida['partidaSustitucionNombre'] : ($partida['partidaProductoNombre'] ?? '');
                                $desc = ($partida['partidaSustitucionDescripcion'] ?? '') !== '' ? ($partida['partidaSustitucionDescripcion'] ?? '') : ($partida['descripcion'] ?? '');
                            @endphp
                            <b><span style="font-size:9.5px;">{{ $sku }} {{ $name }}</span></b><br>
                            @if(!empty($partida['partidaDescripcionAdicional']))
                                <span style="color:#666; font-size:8px;">Descripcion: {!! $partida['partidaDescripcionAdicional'] !!}</span><br>
                            @endif
                            <span style="color:#666; font-size:8px;">{!! $desc !!}</span><br>
                            @if(!empty($partida['textoAdicionalSat']))
                                <span style="color:#666; font-size:8px;">{!! $partida['textoAdicionalSat'] !!}</span>
                            @endif
                        </td>
                        <td class="border-all center-align padding5" style="width:11%">{{ $partida['partida_unidad_medida'] ?? '' }}</td>
                        <td class="border-all center-align padding5" style="width:11%">{{ $money($partida['partida_precio_unitario'] ?? 0) }}</td>
                        <td class="border-all center-align padding5" style="width:7%">{{ $partida['partida_descuento'] ?? 0 }} %</td>
                        <td class="border-all right-align padding5" style="width:13%">{{ $money($partida['partida_monto'] ?? 0) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table>
            <tr>
                <td>
                    <br><br>
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
                </td>
            </tr>
            <tr>
                <td>
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
                </td>
            </tr>
        </table>
    </main>
</body>
</html>