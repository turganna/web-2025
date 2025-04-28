PROGRAM SarahRevere(INPUT, OUTPUT);
USES
    DOS;
VAR
    Query: STRING;
BEGIN 
    Query:= GetEnv('QUERY_STRING');
    WRITELN('Content-Type: text/plain');
    WRITELN;
    IF Query = 'lanterns=1'
    THEN
        WRITELN('The british are coming by sea')
    ELSE
        IF  Query = 'lanterns=2'
        THEN
            WRITELN('The british are coming by land')
        ELSE
            WRITELN('Sarah didn''t say')
END. 
