
chr_cuencodigo
chr_monecodigo
chr_sucucodigo
chr_emplcreacuenta
chr_cliecodigo
dec_cuensaldo
dtt_cuenfechacreacion
vch_cuenestado
int_cuencontmov
chr_cuenclave

select 
	chr_sucucodigo, 
	sum( case when chr_monecodigo = '01'
	     then dec_cuensaldo else 0.0 end ) soles,
	sum( case when chr_monecodigo = '02'
	     then dec_cuensaldo else 0.0 end ) dolares
from cuenta
group by chr_sucucodigo;


select sum(dec_cuensaldo)
from cuenta
where chr_sucucodigo='001'
and chr_monecodigo='01';






 sucucodigo
 sucunombre
 cliecodigo
 cliepaterno
 cliematerno
 clienombre
 cuencodigo
 cuensaldo
 cuenestado
 movinumero
 movifecha
 moviimporte
 cuenreferencia
 tipocodigo
 tiponombre
 tipoaccion
 monecodigo
 monenombre
 
 
 SELECT TIPOCODIGO, TIPONOMBRE, 
    COUNT(1) CANTMOV, SUM(moviimporte) IMPORTE
 FROM V_MOVIMIENTO
 WHERE SUCUCODIGO='001' AND MONECODIGO='02'
 GROUP BY TIPOCODIGO, TIPONOMBRE;
 
 
 
  select , , 
    count(1) , sum(moviimporte) 
 
 
 
 