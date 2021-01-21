import random

mylist = ["<LxwI\X+", ",\Q<*F#!", "(i%9@uZA", "p`d[rvp2", "x`#>;q<s", ":y/$='KV", "%6vB>gm?", "gA!J#Nbb", "D4iG=TCd", ">CVG<I;#", "/!4j--.0", "1mW*;l(i", "'LJz+;n!", "V*lT8[da", "FQ/!Bxp<", ".kZLd?B", "R]t+]03&", "TuQ@(xG", "PBDX%;@&", "bNN(s?RD", "twP8.8^Y", "s8wIni7w", ";kc>htx*", "Iio;r8>r", "E%v[V#y<", "J'%P1i,`", "&M5:7Geu", "5hrI6XqX", "p\`?y?i#", "4$9U=wxd", "*92F:;L_", "YJswLa\.", "^u8T#G]", "BkIC*1pt", "huy'0Iz'", "HfRptq@d", "try)4*u/", "0Y&(384q", "-wdmo#5L", "KDG*^yIi", "f&7;zSIy", "rWgZ%#]:", "k#,@=o+'", "yp`K1WA?", "8^$VP)_*", "xYs&@\'l", "@\=Vt0?d", "%:q6<TGR", "T?%=0xM>", "YCe)o?8F", "ve!^Ukra", "2Jt_:nb", "x=4bIK&C", "tc/8a5@]", "IBoFlVB", "OTH)Q0<0", "S;h]3/we", "zlT7mT(W", "kAZD%iLg", "t9NpBPm", "hOTL8M&c", "U1MwS!G$", "xA>7e3A,", "E)bQ)/=Z", "'DZyMUSS", "Uz-4Z\+1", "n`oij^J.", "R^FOse)0", "'U36dL%G", "wCh3P9%K", "hBh/TT`%", "T50Ka[m`", "W>,F#f%x", "^N)9]?i!", "roG67aRs", "4C_^x+fD", "Pi^qaY*x", "(%8@GTr1", ">Zv/D2%i", "Aj'StN_s", "N6x(G#$g", "k:w_jDN]", ";a5mdZp*", "WwW0hNL%", "D&#<zGkd", ";S\[NDU$", "p'bmsY#g", "u/p$LT2Y", "HKBrA4Ri", "_tob2W6J", "nh%ng*TD", "sY;/9RQ", "[Xn8\JXx", "p!qF-KU/", "6:jjYKF-", "zI9[jg@,", "W2iWGR/y", "=cB8(eQE", "#B?,!lj7", ".v!Gbf/3"]
random.shuffle(mylist)
##print(mylist)
##print("")


for x in mylist:
    count = 0
    d = list(mylist.pop(0))
    mylist.append(d)
    count += 1

newlist = []
for m in mylist:
    random.shuffle(m)
    g = "".join(m)
    newlist.append(g)


print(newlist)
    


