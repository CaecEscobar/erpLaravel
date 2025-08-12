@php
    $money = fn($v) => is_numeric($v) ? number_format((float)$v, 2, '.', ',') : $v;
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <style>
        *{ box-sizing:border-box; }
        body { font-family: Helvetica, Arial, sans-serif; font-size: 11px; }
        table { border-collapse: collapse; width:100%; }
        .right-align{ text-align:right; } .center-align{ text-align:center; }
        .padding5{ padding:5px; } .padding3{ padding:3px; }
        .titleTable{ background:#233c83; color:#fff; padding:5px; }
        .border-all{ border:1px solid #233c83; }
        .grupoBg{ background:#dadada; }
        .info-left{ background:#233c83; color:#fff; padding:5px; border:1px solid #233c83; border-top-left-radius:2mm; border-bottom-left-radius:2mm; }
        .info-right{ padding:5px; border:1px solid #233c83; border-top-right-radius:2mm; border-bottom-right-radius:2mm; }

        html, body { margin: 0; }
        @page { margin: 60mm 10mm 22mm 10mm; }
        header { height: 60mm; }
        footer { height: 22mm; }
        main   { margin: 0; }                   
        .cabezera { height: auto; }       
    </style>
</head>
<body>
<header>
    {{-- Encabezado idéntico al de orders.blade.php --}}
    @include('pdf.partials.header', ['data' => $data])
</header>
<footer>
    <table style="width:100%; border-top:1px solid #233c83; font-size:9px;">
        <tr>
            <td style="width:43%; text-align:left;">{{ $data['infoEmpresa']['empresa'] ?? '' }}</td>
            <td style="width:24%; text-align:center;">Página <span class="page-number"></span></td>
            <td style="width:33%; text-align:right;">{{ $data['anhio'] ?? '' }}</td>
        </tr>
    </table>
</footer>
<main>
    {{-- Datos de Elaboró / Moneda / Solicitado Por --}}
    @include('pdf.partials.resume', ['data' => $data])

    {{-- Render de partidas por bloque --}}
    @foreach(($data['partidasBloques'] ?? []) as $bloque)
        @if(($bloque[0]['tipo'] ?? 'Standard') === 'Standard')
            <table class="detail" style="font-size:10px;">
                <thead>
                    <tr>
                        <th class="titleTable" style="width:7%; text-align:center;">Cant.</th>
                        <th class="titleTable" style="width:51%; text-align:left;">Descripcion</th>
                        <th class="titleTable" style="width:11%; text-align:center;">U. Medida</th>
                        <th class="titleTable" style="width:11%; text-align:center;">P. Unitario</th>
                        <th class="titleTable" style="width:7%; text-align:center;">Dto</th>
                        <th class="titleTable" style="width:13%; text-align:right;">Monto</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($bloque as $partida)
                    @php $p = $partida['data'] ?? []; @endphp
                    <tr style="page-break-inside:avoid;">
                        <td class="border-all center-align padding5" style="width:7%"><span style="font-size:8px;">{{ $p['partida_producto_cantidad'] ?? '' }}</span></td>
                        <td class="border-all padding5" style="width:51%">
                            @php
                                $sku  = ($p['partida_sustitucion_sku'] ?? '') !== '' ? $p['partida_sustitucion_sku'] : ($p['partida_producto_sku'] ?? '');
                                $name = ($p['partida_sustitucion_nombre'] ?? '') !== '' ? $p['partida_sustitucion_nombre'] : ($p['partida_producto_nombre'] ?? '');
                                $desc = ($p['partida_sustitucion_descripcion'] ?? '') !== '' ? ($p['partida_sustitucion_descripcion'] ?? '') : ($p['partida_producto_descripcion'] ?? '');
                            @endphp
                            <nobreak>
                                <b><span style="font-size:9.5px;">{{ $sku }} {{ $name }}</span></b>
                                @if(!empty($p['partida_descripcion_adicional']))<br><b><span style="font-size:11.5px;">{!! $p['partida_descripcion_adicional'] !!}</span></b>@endif
                                <br><span style="font-size:8px;">{!! $desc !!}</span>
                            </nobreak>
                        </td>
                        <td class="border-all center-align padding5" style="width:11%">{{ $p['partida_unidad_medida'] ?? '' }}</td>
                        <td class="border-all center-align padding5" style="width:11%">{{ $money($p['partida_precio_unitario'] ?? 0) }}</td>
                        <td class="border-all center-align padding5" style="width:7%">{{ $p['partida_descuento'] ?? 0 }} %</td>
                        <td class="border-all right-align padding5" style="width:13%">{{ $money($p['partida_monto'] ?? 0) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
        @else
            {{-- Bloque tipo “grupo” con detalle de subproductos --}}
            @php $descuento = 0; $monto = 0; @endphp
            <table class="detail" style="font-size:10px;">
                <thead>
                    <tr>
                        @foreach($bloque as $partida)
                            @php $pd = $partida['data'] ?? []; $descuento = $pd['partida_descuento'] ?? 0; $monto = $pd['partida_monto'] ?? 0; @endphp
                            <th class="titleTable" style="width:7%; text-align:center;">Cant.<br>{{ $pd['partida_poducto_cantidad'] ?? '' }}</th>
                            <th class="titleTable" style="width:51%; text-align:left;">
                                <nobreak>
                                    Descripcion<br>
                                    @if(!empty($pd['partida_descripcion_adicional']))
                                        <b><span style="font-size:11.5px;">{!! $pd['partida_descripcion_adicional'] !!}</span></b><br>
                                    @endif
                                    <b><span style="font-size:11.5px;">{{ $pd['partida_producto_sku'] ?? '' }} {{ $pd['partida_producto_nombre'] ?? '' }}</span></b>
                                    <br><span style="font-size:8px;">{!! $pd['descripcion'] ?? '' !!}</span>
                                </nobreak>
                            </th>
                            <th class="titleTable" style="width:11%; text-align:center;">U. Medida</th>
                            <th class="titleTable" style="width:11%; text-align:center;">P. Unitario</th>
                            <th class="titleTable" style="width:7%; text-align:center;">Dto</th>
                            <th class="titleTable" style="width:13%; text-align:right;">Monto</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($bloque as $partidaDet)
                        @foreach(($partidaDet['detalleProducto']['detalles'] ?? []) as $p)
                            <tr style="page-break-inside:avoid;">
                                <td class="border-all center-align padding5 grupoBg" style="width:7%"><span style="font-size:8px;">{{ $p['cantidad'] ?? '' }}</span></td>
                                <td class="border-all padding5 grupoBg" style="width:51%">
                                    <nobreak>
                                        <span style="font-weight:bold; font-size:9.5px;">{{ $p['sku'] ?? '' }} {{ $p['nombre'] ?? '' }}</span><br>
                                        <span style="font-size:8px;">{!! $p['descripcion'] ?? '' !!}</span>
                                    </nobreak>
                                </td>
                                <td class="border-all center-align padding5 grupoBg" style="width:11%">{{ $p['unidadMedida'] ?? '' }}</td>
                                <td class="border-all center-align padding5 grupoBg" style="width:11%">
                                    @if(($p['tipoMoneda'] ?? 1) == 1)
                                        {{ $money($p['PrecioMxVenta'] ?? 0) }}
                                    @else
                                        {{ $money($p['PrecioUsVenta'] ?? 0) }}
                                    @endif
                                </td>
                                <td class="border-all center-align padding5 grupoBg" style="width:7%">{{ $descuento }} %</td>
                                <td class="border-all right-align padding5 grupoBg" style="width:13%">
                                    @if(($p['tipoMoneda'] ?? 1) == 1)
                                        {{ $money($p['SubTotalPrecioMx'] ?? 0) }}
                                    @else
                                        {{ $money($p['SubTotalPrecioUs'] ?? 0) }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                    <tr>
                        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        <td class="border-all right-align padding5 grupoBg" style="width:13%; font-size:11.5px; font-weight:bold;">{{ $money($monto) }}</td>
                    </tr>
                </tbody>
            </table>
            <br>
        @endif
    @endforeach

    {{-- Totales + leyendas (idénticos a orders.blade.php) --}}
    @include('pdf.partials.totales', ['data' => $data])
</main>
</body>
</html>