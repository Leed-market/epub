<?php
/**
 * This should be a complete list of all HTML entities, mapped to their UTF-8 character codes.
 *
 * @author A. Grandt
 * @copyright A. Grandt 2009-2013
 * @license GNU LGPL, Attribution required for commercial implementations, requested for everything else.
 * @version 3.00
 */
global $htmlEntities;
$htmlEntities = [];

$htmlEntities["&quot;"]     ="\x22"; // &#34; ((double) quotation mark)
$htmlEntities["&amp;"]      ="\x26"; // &#38; (ampersand)
$htmlEntities["&apos;"]     ="\x27"; // &#39; (apostrophe  = apostrophe-quote)
$htmlEntities["&lt;"]       ="\x3C"; // &#60; (less-than sign)
$htmlEntities["&gt;"]       ="\x3E"; // &#62; (greater-than sign)
$htmlEntities["&nbsp;"]     ="\xC2\xA0"; // &#160; (non-breaking space)
$htmlEntities["&iexcl;"]    ="\xC2\xA1"; // &#161; (inverted exclamation mark)
$htmlEntities["&cent;"]     ="\xC2\xA2"; // &#162; (cent)
$htmlEntities["&pound;"]    ="\xC2\xA3"; // &#163; (pound)
$htmlEntities["&curren;"]   ="\xC2\xA4"; // &#164; (currency)
$htmlEntities["&yen;"]      ="\xC2\xA5"; // &#165; (yen)
$htmlEntities["&brvbar;"]   ="\xC2\xA6"; // &#166; (broken vertical bar)
$htmlEntities["&sect;"]     ="\xC2\xA7"; // &#167; (section)
$htmlEntities["&uml;"]      ="\xC2\xA8"; // &#168; (spacing diaeresis)
$htmlEntities["&copy;"]     ="\xC2\xA9"; // &#169; (copyright)
$htmlEntities["&ordf;"]     ="\xC2\xAA"; // &#170; (feminine ordinal indicator)
$htmlEntities["&laquo;"]    ="\xC2\xAB"; // &#171; (angle quotation mark (left))
$htmlEntities["&not;"]      ="\xC2\xAC"; // &#172; (negation)
$htmlEntities["&shy;"]      ="\xC2\xAD"; // &#173; (soft hyphen)
$htmlEntities["&reg;"]      ="\xC2\xAE"; // &#174; (registered trademark)
$htmlEntities["&macr;"]     ="\xC2\xAF"; // &#175; (spacing macron)
$htmlEntities["&deg;"]      ="\xC2\xB0"; // &#176; (degree)
$htmlEntities["&plusmn;"]   ="\xC2\xB1"; // &#177; (plus-or-minus)
$htmlEntities["&sup2;"]     ="\xC2\xB2"; // &#178; (superscript 2)
$htmlEntities["&sup3;"]     ="\xC2\xB3"; // &#179; (superscript 3)
$htmlEntities["&acute;"]    ="\xC2\xB4"; // &#180; (spacing acute)
$htmlEntities["&micro;"]    ="\xC2\xB5"; // &#181; (micro)
$htmlEntities["&para;"]     ="\xC2\xB6"; // &#182; (paragraph)
$htmlEntities["&middot;"]   ="\xC2\xB7"; // &#183; (middle dot)
$htmlEntities["&cedil;"]    ="\xC2\xB8"; // &#184; (spacing cedilla)
$htmlEntities["&sup1;"]     ="\xC2\xB9"; // &#185; (superscript 1)
$htmlEntities["&ordm;"]     ="\xC2\xBA"; // &#186; (masculine ordinal indicator)
$htmlEntities["&raquo;"]    ="\xC2\xBB"; // &#187; (angle quotation mark (right))
$htmlEntities["&frac14;"]   ="\xC2\xBC"; // &#188; (fraction 1/4)
$htmlEntities["&frac12;"]   ="\xC2\xBD"; // &#189; (fraction 1/2)
$htmlEntities["&frac34;"]   ="\xC2\xBE"; // &#190; (fraction 3/4)
$htmlEntities["&iquest;"]   ="\xC2\xBF"; // &#191; (inverted question mark)
$htmlEntities["&Agrave;"]   ="\xC3\x80"; // &#192; (capital a, grave accent)
$htmlEntities["&Aacute;"]   ="\xC3\x81"; // &#193; (capital a, acute accent)
$htmlEntities["&Acirc;"]    ="\xC3\x82"; // &#194; (capital a, circumflex accent)
$htmlEntities["&Atilde;"]   ="\xC3\x83"; // &#195; (capital a, tilde)
$htmlEntities["&Auml;"]     ="\xC3\x84"; // &#196; (capital a, umlaut mark)
$htmlEntities["&Aring;"]    ="\xC3\x85"; // &#197; (capital a, ring)
$htmlEntities["&AElig;"]    ="\xC3\x86"; // &#198; (capital ae)
$htmlEntities["&Ccedil;"]   ="\xC3\x87"; // &#199; (capital c, cedilla)
$htmlEntities["&Egrave;"]   ="\xC3\x88"; // &#200; (capital e, grave accent)
$htmlEntities["&Eacute;"]   ="\xC3\x89"; // &#201; (capital e, acute accent)
$htmlEntities["&Ecirc;"]    ="\xC3\x8A"; // &#202; (capital e, circumflex accent)
$htmlEntities["&Euml;"]     ="\xC3\x8B"; // &#203; (capital e, umlaut mark)
$htmlEntities["&Igrave;"]   ="\xC3\x8C"; // &#204; (capital i, grave accent)
$htmlEntities["&Iacute;"]   ="\xC3\x8D"; // &#205; (capital i, acute accent)
$htmlEntities["&Icirc;"]    ="\xC3\x8E"; // &#206; (capital i, circumflex accent)
$htmlEntities["&Iuml;"]     ="\xC3\x8F"; // &#207; (capital i, umlaut mark)
$htmlEntities["&ETH;"]      ="\xC3\x90"; // &#208; (capital eth, Icelandic)
$htmlEntities["&Ntilde;"]   ="\xC3\x91"; // &#209; (capital n, tilde)
$htmlEntities["&Ograve;"]   ="\xC3\x92"; // &#210; (capital o, grave accent)
$htmlEntities["&Oacute;"]   ="\xC3\x93"; // &#211; (capital o, acute accent)
$htmlEntities["&Ocirc;"]    ="\xC3\x94"; // &#212; (capital o, circumflex accent)
$htmlEntities["&Otilde;"]   ="\xC3\x95"; // &#213; (capital o, tilde)
$htmlEntities["&Ouml;"]     ="\xC3\x96"; // &#214; (capital o, umlaut mark)
$htmlEntities["&times;"]    ="\xC3\x97"; // &#215; (multiplication)
$htmlEntities["&Oslash;"]   ="\xC3\x98"; // &#216; (capital o, slash)
$htmlEntities["&Ugrave;"]   ="\xC3\x99"; // &#217; (capital u, grave accent)
$htmlEntities["&Uacute;"]   ="\xC3\x9A"; // &#218; (capital u, acute accent)
$htmlEntities["&Ucirc;"]    ="\xC3\x9B"; // &#219; (capital u, circumflex accent)
$htmlEntities["&Uuml;"]     ="\xC3\x9C"; // &#220; (capital u, umlaut mark)
$htmlEntities["&Yacute;"]   ="\xC3\x9D"; // &#221; (capital y, acute accent)
$htmlEntities["&THORN;"]    ="\xC3\x9E"; // &#222; (capital THORN, Icelandic)
$htmlEntities["&szlig;"]    ="\xC3\x9F"; // &#223; (small sharp s, German)
$htmlEntities["&agrave;"]   ="\xC3\xA0"; // &#224; (small a, grave accent)
$htmlEntities["&aacute;"]   ="\xC3\xA1"; // &#225; (small a, acute accent)
$htmlEntities["&acirc;"]    ="\xC3\xA2"; // &#226; (small a, circumflex accent)
$htmlEntities["&atilde;"]   ="\xC3\xA3"; // &#227; (small a, tilde)
$htmlEntities["&auml;"]     ="\xC3\xA4"; // &#228; (small a, umlaut mark)
$htmlEntities["&aring;"]    ="\xC3\xA5"; // &#229; (small a, ring)
$htmlEntities["&aelig;"]    ="\xC3\xA6"; // &#230; (small ae)
$htmlEntities["&ccedil;"]   ="\xC3\xA7"; // &#231; (small c, cedilla)
$htmlEntities["&egrave;"]   ="\xC3\xA8"; // &#232; (small e, grave accent)
$htmlEntities["&eacute;"]   ="\xC3\xA9"; // &#233; (small e, acute accent)
$htmlEntities["&ecirc;"]    ="\xC3\xAA"; // &#234; (small e, circumflex accent)
$htmlEntities["&euml;"]     ="\xC3\xAB"; // &#235; (small e, umlaut mark)
$htmlEntities["&igrave;"]   ="\xC3\xAC"; // &#236; (small i, grave accent)
$htmlEntities["&iacute;"]   ="\xC3\xAD"; // &#237; (small i, acute accent)
$htmlEntities["&icirc;"]    ="\xC3\xAE"; // &#238; (small i, circumflex accent)
$htmlEntities["&iuml;"]     ="\xC3\xAF"; // &#239; (small i, umlaut mark)
$htmlEntities["&eth;"]      ="\xC3\xB0"; // &#240; (small eth, Icelandic)
$htmlEntities["&ntilde;"]   ="\xC3\xB1"; // &#241; (small n, tilde)
$htmlEntities["&ograve;"]   ="\xC3\xB2"; // &#242; (small o, grave accent)
$htmlEntities["&oacute;"]   ="\xC3\xB3"; // &#243; (small o, acute accent)
$htmlEntities["&ocirc;"]    ="\xC3\xB4"; // &#244; (small o, circumflex accent)
$htmlEntities["&otilde;"]   ="\xC3\xB5"; // &#245; (small o, tilde)
$htmlEntities["&ouml;"]     ="\xC3\xB6"; // &#246; (small o, umlaut mark)
$htmlEntities["&divide;"]   ="\xC3\xB7"; // &#247; (division)
$htmlEntities["&oslash;"]   ="\xC3\xB8"; // &#248; (small o, slash)
$htmlEntities["&ugrave;"]   ="\xC3\xB9"; // &#249; (small u, grave accent)
$htmlEntities["&uacute;"]   ="\xC3\xBA"; // &#250; (small u, acute accent)
$htmlEntities["&ucirc;"]    ="\xC3\xBB"; // &#251; (small u, circumflex accent)
$htmlEntities["&uuml;"]     ="\xC3\xBC"; // &#252; (small u, umlaut mark)
$htmlEntities["&yacute;"]   ="\xC3\xBD"; // &#253; (small y, acute accent)
$htmlEntities["&thorn;"]    ="\xC3\xBE"; // &#254; (small thorn, Icelandic)
$htmlEntities["&yuml;"]     ="\xC3\xBF"; // &#255; (small y, umlaut mark)
$htmlEntities["&OElig;"]    ="\xC5\x92"; // &#338; (capital ligature OE)
$htmlEntities["&oelig;"]    ="\xC5\x93"; // &#339; (small ligature oe)
$htmlEntities["&Scaron;"]   ="\xC5\xA0"; // &#352; (capital S with caron)
$htmlEntities["&scaron;"]   ="\xC5\xA1"; // &#353; (small S with caron)
$htmlEntities["&Yuml;"]     ="\xC5\xB8"; // &#376; (capital Y with diaeres)
$htmlEntities["&fnof;"]     ="\xC6\x92"; // &#402; (f with hook)
$htmlEntities["&circ;"]     ="\xCB\x86"; // &#710; (modifier letter circumflex accent)
$htmlEntities["&tilde;"]    ="\xCB\x9C"; // &#732; (small tilde)
$htmlEntities["&Alpha;"]    ="\xCE\x91"; // &#913; (Alpha)
$htmlEntities["&Beta;"]     ="\xCE\x92"; // &#914; (Beta)
$htmlEntities["&Gamma;"]    ="\xCE\x93"; // &#915; (Gamma)
$htmlEntities["&Delta;"]    ="\xCE\x94"; // &#916; (Delta)
$htmlEntities["&Epsilon;"]  ="\xCE\x95"; // &#917; (Epsilon)
$htmlEntities["&Zeta;"]     ="\xCE\x96"; // &#918; (Zeta)
$htmlEntities["&Eta;"]      ="\xCE\x97"; // &#919; (Eta)
$htmlEntities["&Theta;"]    ="\xCE\x98"; // &#920; (Theta)
$htmlEntities["&Iota;"]     ="\xCE\x99"; // &#921; (Iota)
$htmlEntities["&Kappa;"]    ="\xCE\x9A"; // &#922; (Kappa)
$htmlEntities["&Lambda;"]   ="\xCE\x9B"; // &#923; (Lambda)
$htmlEntities["&Mu;"]       ="\xCE\x9C"; // &#924; (Mu)
$htmlEntities["&Nu;"]       ="\xCE\x9D"; // &#925; (Nu)
$htmlEntities["&Xi;"]       ="\xCE\x9E"; // &#926; (Xi)
$htmlEntities["&Omicron;"]  ="\xCE\x9F"; // &#927; (Omicron)
$htmlEntities["&Pi;"]       ="\xCE\xA0"; // &#928; (Pi)
$htmlEntities["&Rho;"]      ="\xCE\xA1"; // &#929; (Rho)
$htmlEntities["&Sigma;"]    ="\xCE\xA3"; // &#931; (Sigma)
$htmlEntities["&Tau;"]      ="\xCE\xA4"; // &#932; (Tau)
$htmlEntities["&Upsilon;"]  ="\xCE\xA5"; // &#933; (Upsilon)
$htmlEntities["&Phi;"]      ="\xCE\xA6"; // &#934; (Phi)
$htmlEntities["&Chi;"]      ="\xCE\xA7"; // &#935; (Chi)
$htmlEntities["&Psi;"]      ="\xCE\xA8"; // &#936; (Psi)
$htmlEntities["&Omega;"]    ="\xCE\xA9"; // &#937; (Omega)
$htmlEntities["&alpha;"]    ="\xCE\xB1"; // &#945; (alpha)
$htmlEntities["&beta;"]     ="\xCE\xB2"; // &#946; (beta)
$htmlEntities["&gamma;"]    ="\xCE\xB3"; // &#947; (gamma)
$htmlEntities["&delta;"]    ="\xCE\xB4"; // &#948; (delta)
$htmlEntities["&epsilon;"]  ="\xCE\xB5"; // &#949; (epsilon)
$htmlEntities["&zeta;"]     ="\xCE\xB6"; // &#950; (zeta)
$htmlEntities["&eta;"]      ="\xCE\xB7"; // &#951; (eta)
$htmlEntities["&theta;"]    ="\xCE\xB8"; // &#952; (theta)
$htmlEntities["&iota;"]     ="\xCE\xB9"; // &#953; (iota)
$htmlEntities["&kappa;"]    ="\xCE\xBA"; // &#954; (kappa)
$htmlEntities["&lambda;"]   ="\xCE\xBB"; // &#955; (lambda)
$htmlEntities["&mu;"]       ="\xCE\xBC"; // &#956; (mu)
$htmlEntities["&nu;"]       ="\xCE\xBD"; // &#957; (nu)
$htmlEntities["&xi;"]       ="\xCE\xBE"; // &#958; (xi)
$htmlEntities["&omicron;"]  ="\xCE\xBF"; // &#959; (omicron)
$htmlEntities["&pi;"]       ="\xCF\x80"; // &#960; (pi)
$htmlEntities["&rho;"]      ="\xCF\x81"; // &#961; (rho)
$htmlEntities["&sigmaf;"]   ="\xCF\x82"; // &#962; (sigmaf)
$htmlEntities["&sigma;"]    ="\xCF\x83"; // &#963; (sigma)
$htmlEntities["&tau;"]      ="\xCF\x84"; // &#964; (tau)
$htmlEntities["&upsilon;"]  ="\xCF\x85"; // &#965; (upsilon)
$htmlEntities["&phi;"]      ="\xCF\x86"; // &#966; (phi)
$htmlEntities["&chi;"]      ="\xCF\x87"; // &#967; (chi)
$htmlEntities["&psi;"]      ="\xCF\x88"; // &#968; (psi)
$htmlEntities["&omega;"]    ="\xCF\x89"; // &#969; (omega)
$htmlEntities["&thetasym;"] ="\xCF\x91"; // &#977; (theta symbol)
$htmlEntities["&upsih;"]    ="\xCF\x92"; // &#978; (upsilon symbol)
$htmlEntities["&piv;"]      ="\xCF\x96"; // &#982; (pi symbol)
$htmlEntities["&ensp;"]     ="\xE2\x80\x82"; // &#8194; (en space)
$htmlEntities["&emsp;"]     ="\xE2\x80\x83"; // &#8195; (em space)
$htmlEntities["&thinsp;"]   ="\xE2\x80\x89"; // &#8201; (thin space)
$htmlEntities["&zwnj;"]     ="‌\xE2\x80\x8C"; // &#8204; (zero width non-joiner)
$htmlEntities["&zwj;"]      ="\xE2\x80\x8D‍"; // &#8205; (zero width joiner)
$htmlEntities["&lrm;"]      ="‎\xE2\x80\x8E"; // &#8206; (left-to-right mark)
$htmlEntities["&rlm;"]      ="\xE2\x80\x8F"; // &#8207; (right-to-left mark)
$htmlEntities["&ndash;"]    ="\xE2\x80\x93"; // &#8211; (en dash)
$htmlEntities["&mdash;"]    ="\xE2\x80\x94"; // &#8212; (em dash)
$htmlEntities["&lsquo;"]    ="\xE2\x80\x98"; // &#8216; (left single quotation mark)
$htmlEntities["&rsquo;"]    ="\xE2\x80\x99"; // &#8217; (right single quotation mark)
$htmlEntities["&sbquo;"]    ="\xE2\x80\x9A"; // &#8218; (single low-9 quotation mark)
$htmlEntities["&ldquo;"]    ="\xE2\x80\x9C"; // &#8220; (left double quotation mark)
$htmlEntities["&rdquo;"]    ="\xE2\x80\x9D"; // &#8221; (right double quotation mark)
$htmlEntities["&bdquo;"]    ="\xE2\x80\x9E"; // &#8222; (double low-9 quotation mark)
$htmlEntities["&dagger;"]   ="\xE2\x80\xA0"; // &#8224; (dagger)
$htmlEntities["&Dagger;"]   ="\xE2\x80\xA1"; // &#8225; (double dagger)
$htmlEntities["&bull;"]     ="\xE2\x80\xA2"; // &#8226; (bullet)
$htmlEntities["&hellip;"]   ="\xE2\x80\xA6"; // &#8230; (horizontal ellipsis)
$htmlEntities["&permil;"]   ="\xE2\x80\xB0"; // &#8240; (per mille)
$htmlEntities["&prime;"]    ="\xE2\x80\xB2"; // &#8242; (minutes or prime)
$htmlEntities["&Prime;"]    ="\xE2\x80\xB3"; // &#8243; (seconds or Double Prime)
$htmlEntities["&lsaquo;"]   ="\xE2\x80\xB9"; // &#8249; (single left angle quotation)
$htmlEntities["&rsaquo;"]   ="\xE2\x80\xBA"; // &#8250; (single right angle quotation)
$htmlEntities["&oline;"]    ="\xE2\x80\xBE"; // &#8254; (overline)
$htmlEntities["&frasl;"]    ="\xE2\x81\x84"; // &#8260; (fraction slash)
$htmlEntities["&euro;"]     ="\xE2\x82\xAC"; // &#8364; (euro)
$htmlEntities["&image;"]    ="\xE2\x84\x91"; // &#8465; (blackletter capital I)
$htmlEntities["&weierp;"]   ="\xE2\x84\x98"; // &#8472; (script capital P)
$htmlEntities["&real;"]     ="\xE2\x84\x9C"; // &#8476; (blackletter capital R)
$htmlEntities["&trade;"]    ="\xE2\x84\xA2"; // &#8482; (trademark)
$htmlEntities["&alefsym;"]  ="\xE2\x84\xB5"; // &#8501; (alef)
$htmlEntities["&larr;"]     ="\xE2\x86\x90"; // &#8592; (left arrow)
$htmlEntities["&uarr;"]     ="\xE2\x86\x91"; // &#8593; (up arrow)
$htmlEntities["&rarr;"]     ="\xE2\x86\x92"; // &#8594; (right arrow)
$htmlEntities["&darr;"]     ="\xE2\x86\x93"; // &#8595; (down arrow)
$htmlEntities["&harr;"]     ="\xE2\x86\x94"; // &#8596; (left right arrow)
$htmlEntities["&crarr;"]    ="\xE2\x86\xB5"; // &#8629; (carriage return arrow)
$htmlEntities["&lArr;"]     ="\xE2\x87\x90"; // &#8656; (left double arrow)
$htmlEntities["&uArr;"]     ="\xE2\x87\x91"; // &#8657; (up double arrow)
$htmlEntities["&rArr;"]     ="\xE2\x87\x92"; // &#8658; (right double arrow)
$htmlEntities["&dArr;"]     ="\xE2\x87\x93"; // &#8659; (down double arrow)
$htmlEntities["&hArr;"]     ="\xE2\x87\x94"; // &#8660; (left right double arrow)
$htmlEntities["&forall;"]   ="\xE2\x88\x80"; // &#8704; (for all)
$htmlEntities["&part;"]     ="\xE2\x88\x82"; // &#8706; (partial differential)
$htmlEntities["&exist;"]    ="\xE2\x88\x83"; // &#8707; (there exists)
$htmlEntities["&empty;"]    ="\xE2\x88\x85"; // &#8709; (empty set)
$htmlEntities["&nabla;"]    ="\xE2\x88\x87"; // &#8711; (backward difference)
$htmlEntities["&isin;"]     ="\xE2\x88\x88"; // &#8712; (element of)
$htmlEntities["&notin;"]    ="\xE2\x88\x89"; // &#8713; (not an element of)
$htmlEntities["&ni;"]       ="\xE2\x88\x8B"; // &#8715; (ni = contains as member)
$htmlEntities["&prod;"]     ="\xE2\x88\x8F"; // &#8719; (n-ary product)
$htmlEntities["&sum;"]      ="\xE2\x88\x91"; // &#8721; (n-ary sumation)
$htmlEntities["&minus;"]    ="\xE2\x88\x92"; // &#8722; (minus)
$htmlEntities["&lowast;"]   ="\xE2\x88\x97"; // &#8727; (asterisk operator)
$htmlEntities["&radic;"]    ="\xE2\x88\x9A"; // &#8730; (square root)
$htmlEntities["&prop;"]     ="\xE2\x88\x9D"; // &#8733; (proportional to)
$htmlEntities["&infin;"]    ="\xE2\x88\x9E"; // &#8734; (infinity)
$htmlEntities["&ang;"]      ="\xE2\x88\xA0"; // &#8736; (angle)
$htmlEntities["&and;"]      ="\xE2\x88\xA7"; // &#8743; (logical and)
$htmlEntities["&or;"]       ="\xE2\x88\xA8"; // &#8744; (logical or)
$htmlEntities["&cap;"]      ="\xE2\x88\xA9"; // &#8745; (intersection)
$htmlEntities["&cup;"]      ="\xE2\x88\xAA"; // &#8746; (union)
$htmlEntities["&int;"]      ="\xE2\x88\xAB"; // &#8747; (integral)
$htmlEntities["&there4;"]   ="\xE2\x88\xB4"; // &#8756; (therefore)
$htmlEntities["&sim;"]      ="\xE2\x88\xBC"; // &#8764; (similar to)
$htmlEntities["&cong;"]     ="\xE2\x89\x85"; // &#8773; (congruent to)
$htmlEntities["&asymp;"]    ="\xE2\x89\x88"; // &#8776; (approximately equal)
$htmlEntities["&ne;"]       ="\xE2\x89\xA0"; // &#8800; (not equal)
$htmlEntities["&equiv;"]    ="\xE2\x89\xA1"; // &#8801; (equivalent)
$htmlEntities["&le;"]       ="\xE2\x89\xA4"; // &#8804; (less or equal)
$htmlEntities["&ge;"]       ="\xE2\x89\xA5"; // &#8805; (greater or equal)
$htmlEntities["&sub;"]      ="\xE2\x8A\x82"; // &#8834; (subset of)
$htmlEntities["&sup;"]      ="\xE2\x8A\x83"; // &#8835; (superset of)
$htmlEntities["&nsub;"]     ="\xE2\x8A\x84"; // &#8836; (not subset of)
$htmlEntities["&sube;"]     ="\xE2\x8A\x86"; // &#8838; (subset or equal)
$htmlEntities["&supe;"]     ="\xE2\x8A\x87"; // &#8839; (superset or equal)
$htmlEntities["&oplus;"]    ="\xE2\x8A\x95"; // &#8853; (circled plus)
$htmlEntities["&otimes;"]   ="\xE2\x8A\x87"; // &#8855; (circled times)
$htmlEntities["&perp;"]     ="\xE2\x8A\xA5"; // &#8869; (perpendicular)
$htmlEntities["&sdot;"]     ="\xE2\x8C\x85"; // &#8901; (dot operator)
$htmlEntities["&lceil;"]    ="\xE2\x8C\x88"; // &#8968; (left ceiling)
$htmlEntities["&rceil;"]    ="\xE2\x8C\x89"; // &#8969; (right ceiling)
$htmlEntities["&lfloor;"]   ="\xE2\x8C\x8A"; // &#8970; (left floor)
$htmlEntities["&rfloor;"]   ="\xE2\x8C\x8B"; // &#8971; (right floor)
$htmlEntities["&lang;"]     ="\xE2\x8C\xA9"; // &#9001; (left angle bracket = bra)
$htmlEntities["&rang;"]     ="\xE2\x8C\xAA"; // &#9002; (right angle bracket = ket)
$htmlEntities["&loz;"]      ="\xE2\x97\x8A"; // &#9674; (lozenge)
$htmlEntities["&spades;"]   ="\xE2\x99\xA0"; // &#9824; (spade)
$htmlEntities["&clubs;"]    ="\xE2\x99\xA3"; // &#9827; (club)
$htmlEntities["&hearts;"]   ="\xE2\x99\xA5"; // &#9829; (heart)
$htmlEntities["&diams;"]    ="\xE2\x99\xA6"; // &#9830; (diamond)
?>