PROGRAM PrintName(INPUT, OUTPUT);
USES
    DOS;
BEGIN {PrintName}
  WRITELN('HTTP/2 200 Ok'); 
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('Hello: ', GetEnv('QUERY_STRING'))
END. {PrintName}